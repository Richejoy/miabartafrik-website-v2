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

    const LOCAL_URL = 'https://localhost/miabartafrik/';

    const ONLINE_URL = 'https://miabartafrik.com/';

    const VIEW_BLOCKED_MESSAGE = "Cette page a été bloquée par son responsable";

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

	protected function getAppropriateLocal(Request $request)
	{
		$local = null;

		if ($request->has('civility_id')) {
			switch (intval($request->input('civility_id'))) {
				case 1:
					$local = 'man.png';
					break;

				case 2:
					$local = 'woman.png';
					break;

				case 3:
					$local = 'lady.png';
					break;
				
				default:
					$local = 'default.png';
					break;
			}
		}

		return $local;
	}

	protected function getAppropriateRemote(Request $request, string $folder)
	{
		$local = $this->getAppropriateLocal($request);

		return self::ONLINE_URL . "libraries/images/users/{$folder}/{$local}";
	}

	protected function getDefaultBackImage(string $folder = 'users'): array
	{
		$local = 'cover.jpg';

		return [
            'folder' => $folder,
            'local' => self::ONLINE_URL . "libraries/images/users/{$folder}/{$local}",
            'remote' => self::ONLINE_URL . "libraries/images/users/{$folder}/{$local}",
            'description' => 'Ma jolie photo de couverture',
            'library_type_id' => 1,
        ];
	}

	public function getMiabpay()
	{
			return (config('app.env') == 'local') ? self::LOCAL_URL . 'moneypay/payment/checkout' : self::ONLINE_URL . 'moneypay/payment/checkout';
	}
}
