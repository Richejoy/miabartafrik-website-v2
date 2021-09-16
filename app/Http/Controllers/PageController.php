<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Civility;
use App\Models\Library;
use App\Models\UserType;
use App\Models\User;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Artist;
use App\Models\Partner;
use App\Models\Photographer;
use App\Models\Subscriber;
use App\Models\Transaction;
use App\Events\UserEvent;
use App\Events\SubscriberEvent;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Events\MessageEvent;

class PageController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('pages.index');
    }

    public function terms(Request $request)
    {
        return view('pages.terms');
    }

    public function conditions(Request $request)
    {
        return view('pages.conditions');
    }

    public function faq(Request $request)
    {
        return view('pages.faq');
    }

    public function sitemap(Request $request)
    {
        return view('pages.sitemap');
    }

    public function about(Request $request)
    {
        return view('pages.about');
    }

    public function donate(Request $request)
    {
        session()->put('verificationCode', $this->getFormVerificationCode());

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'first_name' => 'required|min:2|max:25',
                'last_name' => 'required|min:2|max:25',
                'email' => 'required|email|min:3|max:40',
                'phone' => 'required|min:8|max:40',
                'message' => 'required|min:10',
                'amount' => 'required',
                'verification_code' => 'required',
            ]);

            if ($request->verification_code != session('verificationCode')) {
                return back()->withDanger('Désolé, code de vérification incorrecte');
            }

            /*$callbackURL = self::CALLBACK_URL;
            $returnURL = self::RETURN_URL;
            $cancelURL = self::CANCEL_URL;

            $payhomsURL = self::PAYHOMES_URL;
            $token = self::PAYHOMES_TOKEN;
            $identifier = mb_substr(uniqid(date('YmdHis')), 0, 25);
            $amount = $request->amount;
            $description = "Don";

            $queryString = [
                "amount={$amount}",
                "token={$token}",
                "description={$description}",
                "identifier={$identifier}",
                "callback_url={$callbackURL}",
                "return_url={$returnURL}",
                "cancel_url={$cancelURL}",
            ];

            return redirect($payhomsURL . implode('&', $queryString));*/
        }

        return view('pages.donate');
    }

    public function lockScreen(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'email_phone_username' => 'required',
                'password' => 'required',
            ]);

            if (session('lockUser')->email == $request->email_phone_username) {

                return $this->_processLoginForm($request, session('lockUser'));

            }

            return back()->withDanger("Impossible de vous connecter.");
        }

        return view('pages.lock_screen');
    }

    public function login(Request $request)
    {
        //event(new MessageEvent('hello world'));
        //dd(bcrypt(123456789));
        
        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'email_phone_username' => 'required',
                'password' => 'required',
            ]);

            if ($user = User::whereEmail($request->email_phone_username)->first()) {

                return $this->_processLoginForm($request, $user);

            } elseif ($user = User::wherePhone($request->email_phone_username)->first()) {

                return $this->_processLoginForm($request, $user);
                
            } elseif ($user = User::whereUsername($request->email_phone_username)->first()) {

                return $this->_processLoginForm($request, $user);
                
            }

            return back()->withDanger("Impossible de vous trouvé dans le régistre.");
        }

        return view('pages.login');
    }

    public function register(Request $request)
    {
        session()->forget('registratedUser');

        $userTypes = UserType::where('id', '>', 1)->get()->sortBy('id')->pluck(null, 'id');

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'user_type_id' => 'required',
                'email' => 'required|email|unique:subscribers',
            ]);

            $subscriber = Subscriber::create([
                'slug' => mb_strtoupper(md5(uniqid())),
                'email' => $request->email,
                'token' => sha1(uniqid()),
                'token_expires' => now()->addDays(3),
                'token_signature' => md5(uniqid()),
                'user_type_id' => $request->user_type_id,
            ]);

            event(new SubscriberEvent($subscriber, ['action' => 'subscription']));

            session()->flash('success', "Inscription et mail envoyé avec succès. Veuillez consulter votre mail");

            flashy()->primary("Inscription et mail envoyé avec succès.");

            return back();
        }

        return view('pages.register', compact('userTypes'));
    }

    public function completed(Request $request, string $email, string $token)
    {
        $subscriber = Subscriber::where(['email' => $email, 'token' => $token])->firstOrFail();

        abort_if(Carbon::parse($subscriber->token_expires)->isPast(), 403, 'Date limte dépassée');

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'country_id' => 'required',
                'civility_id' => 'required',
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'username' => 'required|unique:users',
                'city' => 'required|min:3',
                'address' => 'required|min:3',
                'password' => 'required|min:9|confirmed',
            ]);

            if (empty($request->tou)) {
                return back()->withDanger('Désolé, vous devez accepter les termes du site');
            }

            try {

                DB::beginTransaction();

                $library = Library::create(
                    [
                        'folder' => $this->getAppropriateFolder($subscriber->user_type_id),
                        'local' => $this->getAppropriateLocal($request->input('civility_id')),
                        'remote' => $this->getAppropriateRemote($subscriber->user_type_id, $request->input('civility_id')),
                        'description' => 'Mon jolie avatar par défaut',
                        'library_type_id' => 1,
                    ]
                );

                $password = $request->password;

                $user = User::create(
                    array_merge(
                        $request->all(),
                        [
                            'user_type_id' => $subscriber->user_type_id,
                            'password' => bcrypt($password),
                            'library_id' => $library->id,
                            'token' => sha1(uniqid($library->id)),
                            'slug' => $subscriber->slug,
                        ]
                    )
                );

                //save apropriate user and send apropriate mail
                switch (intval($user->user_type_id)) {
                    case 2:    // 2 : member
                        $member = Member::create([
                            'user_id' => $user->id,
                            'slug' => mb_strtoupper(md5(uniqid())),
                        ]);

                        event(new UserEvent($user, ['action' => 'register_member', 'password' => $password]));
                        break;

                    case 3: //artist
                        $artist = Artist::create([
                            'user_id' => $user->id,
                            'slug' => mb_strtoupper(md5(uniqid())),
                        ]);

                        event(new UserEvent($user, ['action' => 'register_artist', 'password' => $password]));
                        break;

                    case 4: //partner
                        $partner = Partner::create([
                            'user_id' => $user->id,
                            'slug' => mb_strtoupper(md5(uniqid())),
                        ]);

                        event(new UserEvent($user, ['action' => 'register_partner', 'password' => $password]));
                        break;

                    case 5: //photographer
                        $photographer = Photographer::create([
                            'user_id' => $user->id,
                            'slug' => mb_strtoupper(md5(uniqid())),
                        ]);

                        event(new UserEvent($user, ['action' => 'register_photographer', 'password' => $password]));
                        break;
                    
                    default:    // 1 : admin
                        
                        break;
                }

                DB::commit();

                session()->flash('primary', "Inscription et mail envoyé");

                auth()->login($user);

                auth()->user()->update([
                    'completed' => 1,
                ]);

                switch ($user->user_type_id) {
                    case 2:
                        return redirect()->route('member.create');
                        break;

                    case 3:
                        return redirect()->route('artist.create');
                        break;

                    case 4:
                        return redirect()->route('partner.create');
                        break;

                    case 5:
                        return redirect()->route('photographer.create');
                        break;
                    
                    default:
                        // code...
                        break;
                }

            } catch (\Exception $ex) {
                DB::rollback();

                session()->flash('danger', "Impossible de vous inscrire " . $ex);
            }

            return back();
        }

        return view('pages.completed', compact('subscriber'));
    }

    public function confirmed(Request $request)
    {
        if (!session()->has('pendingConnectUser')) {
            return back()->withWarning("Impossible de satisfaire votre demande");
        }

        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'tfa_code' => 'required',
            ]);

            if ($user = User::where('tfa_code', $request->tfa_code)->first()) {

                $user->update([
                    'tfa_code' => null,
                ]);

                return $this->_connectUser($request, session('pendingConnectUser'));
            }

            return back()->withDanger("Code incorrecte");
        }

        return view('pages.confirmed');
    }

    public function activated(Request $request, string $email, string $token)
    {
        if ($user = User::where(['email' => $email, 'token' => $token])->first()) {
            $user->update([
                'activated' => true,
                'can_login' => true,
                'token' => null,
            ]);

            event(new UserEvent($user, ['action' => 'activated']));

            session()->flash('info', "Activation et mail envoyé");

            return redirect()->route('page.login');
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }

    public function passwordForgot(Request $request)
    {
        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'email_phone_username' => 'required',
            ]);

            if ($user = User::whereEmail($request->email_phone_username)->first()) {

                return $this->_processPasswordForgotForm($request, $user);

            } elseif ($user = User::wherePhone($request->email_phone_username)->first()) {

                return $this->_processPasswordForgotForm($request, $user);
                
            } elseif ($user = User::whereUsername($request->email_phone_username)->first()) {

                return $this->_processPasswordForgotForm($request, $user);
                
            }

            return back()->withDanger("Impossible de vous trouvé dans le régistre.");
        }

        return view('pages.password_forgot');
    }

    public function passwordReset(Request $request, string $email, string $token)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'password' => 'required|min:9|confirmed',
            ]);

            if ($user = User::where(['email' => $email, 'token' => $token])->first()) {
                $user->update([
                    'password' => Hash::make($request->password),
                    'token' => null,
                ]);

                event(new UserEvent($user, ['action' => 'passwordReset']));

                return $this->_processLoginForm($request, $user);
            }

            return back()->withDanger("Impossible de satisfaire votre requête.");
        }

        return view('pages.password_reset');
    }

    public function logout(Request $request)
    {
        Transaction::create([
            'activity' => "Déconnexion sur le site",
            'user_id' => auth()->id(),
            'transaction_type_id' => 2,
        ]);

        auth()->logout();

        if (session()->has('pendingConnectUser')) {
            session()->forget('pendingConnectUser');
        }

        if (session()->has('lockUser')) {
            session()->forget('lockUser');
        }

        return redirect()->route('page.login');
    }

    public function lock(Request $request)
    {
        if ($request->has('lock')) {
            session()->put('lockUser', auth()->user());

            auth()->logout();

            return redirect()->route('page.lock_screen');
        }

        return $this->logout($request);
    }

    public function removedAccount(Request $request, string $email, string $token)
    {
        if ($user = User::where(['email' => $email, 'token' => $token])->first()) {
            $user->update([
                'removed' => true,
                'token' => null,
            ]);

            event(new UserEvent($user, ['action' => 'removedAccount']));

            return redirect()->route('page.register');
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }

    public function enabledTFA(Request $request, string $email, string $token)
    {
        if ($user = User::where(['email' => $email, 'token' => $token])->first()) {
            $user->update([
                'tfa_enabled' => ($user->tfa_enabled) ? false : true,
                'token' => null,
            ]);

            event(new UserEvent($user, ['action' => 'enabledTFA']));

            return redirect()->route('page.login');
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }

    private function _connectUser(Request $request, User $user)
    {
        if (!is_null($user)) {
            switch (intval($user->completed)) {
                case 4:
                    
                    if ($user->user_type_id == 1) {
                        $library = Library::create($this->getDefaultBackImage('admins'));

                        $admin = Admin::where('user_id', $user->id)->firstOrFail();

                        $admin->update([
                            'library_id' => $library->id,
                        ]);
                    }

                    $user->update([
                        'last_login' => now(),
                        'nb_login' => ++$user->nb_login,
                    ]);

                    Transaction::create([
                        'activity' => "Connexion sur le site",
                        'user_id' => $user->id,
                        'transaction_type_id' => 1,
                    ]);

                    auth()->login($user, $request->has('remember'));

                    event(new UserEvent($user, ['action' => 'login']));

                    flashy()->success("Bienvenue " . $user->username . " !");

                    return redirect()->route('bookcast.index');

                    break;

                case 3:
                    
                    auth()->login($user);

                    switch ($user->user_type_id) {
                        case 1:
                            return redirect()->route('bookcast.index');
                            break;

                        case 2:
                            return redirect()->route('member.package');
                            break;

                        case 3:
                            return redirect()->route('artist.package');
                            break;

                        case 4:
                            return redirect()->route('partner.package');
                            break;

                        case 5:
                            return redirect()->route('photographer.package');
                            break;
                        
                        default:
                            // code...
                            break;
                    }

                    break;

                case 2:
                    
                    return redirect()->route('library.edit', ['library' => $user->library]);

                    break;

                case 1:
                    
                    auth()->login($user);

                    switch ($user->user_type_id) {
                        case 2:
                            return redirect()->route('member.create');
                            break;

                        case 3:
                            return redirect()->route('artist.create');
                            break;

                        case 4:
                            return redirect()->route('partner.create');
                            break;

                        case 5:
                            return redirect()->route('photographer.create');
                            break;
                        
                        default:
                            // code...
                            break;
                    }

                    break;

                case 0:
                    
                    $subscriber = Subscriber::where('slug', $user->slug)->firstOrFail();

                    return redirect()->route('page.completed', array('email' => $subscriber->email, 'token' => $subscriber->token));

                    break;
                
                default:    //error

                    break;
            }
        }

        return back()->withDanger("Impossible de satisfaire votre requête.");
    }

    private function _processLoginForm(Request $request, User $user)
    {
        if (Hash::check($request->password, $user->password)) {
            if (!$user->removed) {
                if ($user->activated) {
                    if ($user->can_login) {
                        if ($user->tfa_enabled) {
                            $user->update([
                                'tfa_code' => mb_strtoupper(str_shuffle(mb_substr(uniqid($user->id), 0, 6))),
                            ]);

                            event(new UserEvent($user, ['action' => 'confirmed']));

                            session()->put('pendingConnectUser', $user);

                            session()->flash('primary', "Un code de confirmation à double facteur vous à été envoyé dans votre mail");

                            return redirect()->route('user.confirmed');
                        } else {
                            return $this->_connectUser($request, $user);
                        }
                    }

                    return back()->withWarning("Vous n'avez pas le droit de vous connecté.");
                }

                return back()->withInfo("Votre compte n'est pas encore activé.");
            }

            return back()->withInfo("Veuillez attendre la suppression de votre compte.");
        }

        return back()->withPrimary('Votre mot de passe est incorrecte.');
    }

    private function _processPasswordForgotForm(Request $request, User $user)
    {
        if (!$user->removed) {
            if ($user->activated) {
                if ($user->can_login) {
                    $user->update([
                        'token' => sha1(uniqid($user->id)),
                    ]);

                    event(new UserEvent($user, ['action' => 'passwordForgot']));

                    return back()->withInfo("Mail de réinitialisation de compte envoyé.");
                }

                return back()->withWarning("Vous n'avez pas le droit de vous connecté.");
            }

            return back()->withInfo("Votre compte n'est pas encore activé.");
        }

        return back()->withPrimary("Veuillez attendre la suppression de votre compte.");
    }
}
