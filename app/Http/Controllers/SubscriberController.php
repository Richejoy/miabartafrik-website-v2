<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SubscriberEvent;
use App\Models\Subscriber;
use MercurySeries\Flashy\Flashy;

class SubscriberController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}
	
    public function index(Request $request)
    {
        session()->put('verificationCode', $this->getFormVerificationCode());

        return view('subscribers.index');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'full_name' => 'required|min:3|max:50',
                'email' => 'required|email|min:3|max:40',
                'phone' => 'required|min:3|max:40',
                'country_id' => 'required',
                'civility_id' => 'required',
                'artistic_area_id' => 'required',
                //'verification_code' => 'required',
            ]);

            /*if ($request->verification_code != session('verificationCode')) {
                return back()->withDanger('Désolé, code de vérification incorrecte');
            }*/

            if (!Subscriber::whereEmail($request->email)->first()) {
                $subscriber = Subscriber::create(array_merge(
                    $request->all(),
                    [
                        'token' => sha1(uniqid())
                    ]
                ));

                event(new SubscriberEvent($subscriber, ['action' => 'subscribe']));
            }

            Flashy::success("Merci pour votre suscription.");

            return back()->withSuccess("Merci pour votre suscription.");
        }

        return back();
    }

    public function unsubscribe(Request $request, string $email, string $token)
    {
        $subscriber = Subscriber::where(['email' => $email, 'token' => $token])->first();

        if ($subscriber) {
            $subscriber->update([
                'token' => null,
            ]);

            event(new SubscriberEvent($subscriber, ['action' => 'unsubscribe']));
        }

        return redirect()->route('page.index');
    }
}
