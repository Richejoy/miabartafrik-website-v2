<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Events\PaymentEvent;
use App\Models\User;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

	public function callbackURL(Request $request)
    {
        if ($request->isMethod('POST')) {

            /*switch (intval($user->user_type_id)) {

                    case 3:
                        event(new PaymentEvent($user, ['action' => 'artist']));
                        break;

                    case 4:
                        event(new PaymentEvent($user, ['action' => 'photographer']));
                        break;

                    case 5:
                        event(new PaymentEvent($user, ['action' => 'artistic_network']));
                        break;
                    
                    default:
                        // code...
                        break;
                }*/

        }

        return response()->json(['status' => 200, 'message' => 'Ok']);
    }

    public function returnURL(Request $request)
    {
        return view('payments.return_url');
    }

    public function cancelURL(Request $request)
    {
        return view('payments.cancel_url');
    }

	public function artist(Request $request)
    {
        $user = $request->user();

        if ($request->isMethod('POST')) {

            $callbackURL = route('payment.callback_url');
            $returnURL = route('payment.return_url');
            $cancelURL = route('payment.cancel_url');

            $amount = 500;
            $token = self::MIABPAY_TOKEN;
            $identifier = mb_substr(uniqid(date('YmdHis') . $user->id ), 0, 25);

            $queryString = [
                "amount={$amount}",
                "token={$token}",
                "description=Payement",
                "identifier={$identifier}",
                "url={$returnURL}",
            ];

            return redirect($this->getMiabpay() . implode('&', $queryString));

        }

        return view('payments.artist');
    }

    public function photographer(Request $request)
    {
        $user = $request->user();

        if ($request->isMethod('POST')) {

            $callbackURL = route('payment.callback_url');
            $returnURL = route('payment.return_url');
            $cancelURL = route('payment.cancel_url');

            $amount = 500;
            $token = self::MIABPAY_TOKEN;
            $identifier = mb_substr(uniqid(date('YmdHis') . $user->id ), 0, 25);

            $queryString = [
                "amount={$amount}",
                "token={$token}",
                "description=Payement",
                "identifier={$identifier}",
                "url={$returnURL}",
            ];

            return redirect($this->getMiabpay() . implode('&', $queryString));

        }

        return view('payments.photographer');
    }

    public function artisticNetwork(Request $request)
    {
        $user = $request->user();

        if ($request->isMethod('POST')) {

            $callbackURL = route('payment.callback_url');
            $returnURL = route('payment.return_url');
            $cancelURL = route('payment.cancel_url');

            $amount = 500;
            $token = self::MIABPAY_TOKEN;
            $identifier = mb_substr(uniqid(date('YmdHis') . $user->id ), 0, 25);

            $queryString = [
                "amount={$amount}",
                "token={$token}",
                "description=Payement",
                "identifier={$identifier}",
                "url={$returnURL}",
            ];

            return redirect($this->getMiabpay() . implode('&', $queryString));

        }
        
        return view('payments.artistic_network');
    }
}
