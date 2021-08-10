<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
