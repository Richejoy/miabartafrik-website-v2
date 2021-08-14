<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const PAGINATION_NUMBER = 20;

    const MIABPAY_TOKEN = "56sqqsqs5q4s";

    public function __construct()
	{
		# code...
	}

	protected function getFormVerificationCode()
	{
		return mt_rand(100000, 500000);
	}

	protected function getAppropriateFolder(int $user_type_id)
	{
		$folder = null;

		if ($user_type_id > 0) {
			switch ($user_type_id) {
				case 1:
					$folder = 'admins';
					break;

				case 2:
					$folder = 'members';
					break;

				case 3:
					$folder = 'artists';
					break;

				case 4:
					$folder = 'partners';
					break;

				case 5:
					$folder = 'photographers';
					break;
				
				default:
					$folder = 'users';
					break;
			}
		}

		return $folder;
	}

	protected function getAppropriateUrl(Request $request)
	{
		$url = null;

		if ($request->has('civility_id')) {
			switch (intval($request->input('civility_id'))) {
				case 1:
					$url = 'man.png';
					break;

				case 2:
					$url = 'woman.png';
					break;

				case 3:
					$url = 'lady.png';
					break;
				
				default:
					$url = 'default.png';
					break;
			}
		}

		return $url;
	}

	protected function getAppropriateLink(Request $request, string $folder)
	{
		$url = $this->getAppropriateUrl($request);

		return "http://miabartafrik.com/images/{$folder}/{$url}";
	}

	public function getMiabpay()
	{
		if (config('app.env') == 'local') {
			return 'http://localhost/miabartafrik/moneypay/payment/checkout';
		}

		return 'https://miabartafrik.com/moneypay/payment/checkout';
	}
}
