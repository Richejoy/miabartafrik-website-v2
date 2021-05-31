<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Civility;
use App\Models\Image;
use App\Models\UserType;
use App\Models\User;
use App\Models\ArtisticRay;
use App\Models\Transaction;
use App\Events\UserEvent;

class PageController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $countries = Country::all()->sortBy('id')->pluck(null, 'id');
        $civilities = Civility::all()->sortBy('id')->pluck(null, 'id');
        $artisticRays = ArtisticRay::all()->sortBy('id')->pluck(null, 'id');

    	return view('pages.index', compact('countries', 'civilities', 'artisticRays'));
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

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {

            return redirect()->route('bookcast.index');

            /*if ($request->has('form')) {

                switch ($request->form) {
                    case 'email':

                        $this->validate($request, [
                            'email' => 'required',
                            'password' => 'required',
                        ]);

                        if ($user = User::whereEmail($request->email)->first()) {

                            return $this->_processLoginForm($request, $user);
                        }

                        break;

                    case 'phone':

                        $this->validate($request, [
                            'phone' => 'required',
                            'password' => 'required',
                        ]);

                        if ($user = User::wherePhone($request->phone)->first()) {

                            return $this->_processLoginForm($request, $user);
                        }

                        break;

                    case 'username':

                        $this->validate($request, [
                            'username' => 'required',
                            'password' => 'required',
                        ]);

                        if ($user = User::whereUsername($request->username)->first()) {

                            return $this->_processLoginForm($request, $user);
                        }

                        break;

                    default:

                        return back();

                        break;
                }

                return back()->withDanger("Impossible de vous trouvé dans le régistre.");
            }*/
        }

        return view('pages.login');
    }

    public function register(Request $request)
    {
        $userTypes = UserType::where('id', '>', 1)->get()->sortBy('id')->pluck(null, 'id');

        $countries = Country::all()->sortBy('id')->pluck(null, 'id');
        $civilities = Civility::all()->sortBy('id')->pluck(null, 'id');

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'country_id' => 'required',
                'civility_id' => 'required',
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                #'city' => 'required|min:3',
                #'address' => 'required|min:3',
            ]);

            if (empty($request->tou)) {
                return back()->withDanger('Désolé, vous devez accepter les termes du site');
            }

            try {

                DB::beginTransaction();

                $image = Image::create(
                    [
                        'folder' => 'users',
                        'url' => $this->getAppropriateUrl($request),
                        'link' => $this->getAppropriateLink($request, 'users'),
                    ]
                );

                $password = mb_substr(uniqid($image->id), 0, 9);

                $user = User::create(
                    array_merge(
                        $request->all(),
                        [
                            'username' => mb_strtoupper(mb_substr(uniqid($image->id), 0, 15)),
                            'password' => Hash::make($password),
                            'image_id' => $image->id,
                            'token' => sha1(uniqid($image->id)),
                        ]
                    )
                );

                DB::commit();

                event(new UserEvent($user, ['action' => 'register', 'password' => $password]));

                session()->flash('primary', "Inscription et mail envoyé");
            } catch (\Exception $ex) {
                DB::rollback();

                session()->flash('danger', "Impossible de vous inscrire");
            }

            return back();
        }

        return view('pages.register', compact('userTypes', 'countries', 'civilities'));
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

            if ($request->has('form')) {
                switch ($request->form) {
                    case 'email':

                        $this->validate($request, [
                            'email' => 'required',
                        ]);

                        if ($user = User::whereEmail($request->email)->first()) {

                            return $this->_processPasswordForgotForm($request, $user);
                        }

                        break;

                    case 'phone':

                        $this->validate($request, [
                            'phone' => 'required',
                        ]);

                        if ($user = User::wherePhone($request->phone)->first()) {

                            return $this->_processPasswordForgotForm($request, $user);
                        }

                        break;

                    case 'username':

                        $this->validate($request, [
                            'username' => 'required',
                        ]);

                        if ($user = User::whereUsername($request->username)->first()) {

                            return $this->_processPasswordForgotForm($request, $user);
                        }

                        break;

                    default:

                        return back();

                        break;
                }

                return back()->withDanger("Impossible de vous trouvé dans le régistre.");
            }
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
        /*Transaction::create([
            'activity' => "Déconnexion sur le site",
            'user_id' => $request->user()->id,
            'transaction_type_id' => 2,
        ]);*/

        //Auth::logout();

        if (session()->has('pendingConnectUser')) {
            session()->forget('pendingConnectUser');
        }

        return redirect()->route('page.login');
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

            $user->update([
                'last_login' => now(),
                'nb_login' => ++$user->nb_login,
            ]);

            Transaction::create([
                'activity' => "Connexion sur le site",
                'user_id' => $user->id,
                'transaction_type_id' => 1,
            ]);

            Auth::login($user, $request->has('remember_me'));

            session()->flash('success', "Bienvenue dans votre tableau de bord");

            event(new UserEvent($user, ['action' => 'login']));

            return redirect()->route('user.index');
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

    public function partners(Request $request)
    {
        return view('pages.partners');
    }
}
