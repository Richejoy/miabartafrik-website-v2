<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

		return $folder;
	}

	protected function getAppropriateLocal(int $civility_id)
	{
		$local = null;

		switch ($civility_id) {
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

		return $local;
	}

	protected function getAppropriateRemote(int $user_type_id, int $civility_id)
	{
		$folder = $this->getAppropriateFolder($user_type_id);
		$local = $this->getAppropriateLocal($civility_id);

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
            'mime_type' => 'image/jpg',
            'library_type_id' => $this->getLibraryType('image/jpg'),
        ];
	}

    protected function getLibraryType(string $mimeType): int
    {
        $type = 1;

        if (Str::of($mimeType)->startsWith('image')) {
            $type = 1;
        } elseif (Str::of($mimeType)->startsWith('application')) {
            $type = 2;
        } elseif (Str::of($mimeType)->startsWith('video')) {
            $type = 3;
        } elseif (Str::of($mimeType)->startsWith('audio')) {
            $type = 4;
        } elseif (Str::of($mimeType)->startsWith('text')) {
            $type = 5;
        } elseif (Str::of($mimeType)->startsWith('font')) {
            $type = 6;
        }

        return $type;
    }

	public function getMiabpay()
	{
			return (config('app.env') == 'local') ? self::LOCAL_URL . 'moneypay/payment/checkout' : self::ONLINE_URL . 'moneypay/payment/checkout';
	}
}
