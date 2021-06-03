<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CronsController;
use App\Http\Controllers\GuestbookController;

use App\Http\Controllers\BookCastController;
use App\Http\Controllers\BoutikArtController;
use App\Http\Controllers\BonAddressController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache/clear', function() {
	Artisan::call('cache:clear');
	Artisan::call('view:clear');
	return "Cache is cleared";
});

Route::prefix('/')->name('page.')->group(function() {
	Route::get('/', [PageController::class, 'index'])->name('index');
	Route::get('/about', [PageController::class, 'about'])->name('about');
	Route::get('/terms', [PageController::class, 'terms'])->name('terms');
	Route::get('/conditions', [PageController::class, 'conditions'])->name('conditions');
	Route::get('/faq', [PageController::class, 'faq'])->name('faq');
	Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');

	Route::middleware(['logged'])->group(function () {
		Route::match(['GET', 'POST'], '/login', [PageController::class, 'login'])->name('login');
		Route::match(['GET', 'POST'], '/register', [PageController::class, 'register'])->name('register');
		Route::match(['GET', 'POST'], '/confirmed', [PageController::class, 'confirmed'])->name('confirmed');
		Route::match(['GET', 'POST'], '/password/forgot', [PageController::class, 'passwordForgot'])->name('password_forgot');
		Route::match(['GET', 'POST'], '/password/reset/{email}/{token}', [PageController::class, 'passwordReset'])->name('password_reset');

		Route::get('/activated/{email}/{token}', [PageController::class, 'activated'])->name('activated');
		Route::get('/removed/account/{email}/{token}', [PageController::class, 'removedAccount'])->name('removed_account');
		Route::get('/enabled/tfa/{email}/{token}', [PageController::class, 'enabledTFA'])->name('enabled_tfa');

		/**/
		Route::match(['GET', 'POST'], '/register/artist/{email}/{token}', [PageController::class, 'registerArtist'])->name('register_artist');
		Route::match(['GET', 'POST'], '/register/photographer/{email}/{token}', [PageController::class, 'registerPhotographer'])->name('register_photographer');
		Route::match(['GET', 'POST'], '/register/artistic/network/{email}/{token}', [PageController::class, 'registerArtisticNetwork'])->name('register_artistic_network');
		/**/
	});

	Route::match(['GET', 'POST'], '/donate', [PageController::class, 'donate'])->name('donate');

	Route::get('/logout', [PageController::class, 'logout'])->name('logout');

	Route::get('/partners', [PageController::class, 'partners'])->name('partners');

	Route::middleware(['auth'])->group(function () {
		Route::get('/services', [PageController::class, 'services'])->name('services');
	});
});

Route::prefix('/utilisateur')->name('user.')->group(function() {
	Route::get('/transactions', [UserController::class, 'transactions'])->name('transactions');

	Route::get('/', [UserController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'], '/{user}/afficher', [UserController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'], '/{user}/editer', [UserController::class, 'edit'])->name('edit');
});

Route::prefix('/contact')->name('contact.')->group(function () {
	Route::get('/', [ContactController::class, 'index'])->name('index');
	Route::post('/store', [ContactController::class, 'store'])->name('store');
});

Route::prefix('/testimonials')->name('guestbook.')->group(function () {
	Route::get('/', [GuestbookController::class, 'index'])->name('index');
	Route::get('/create', [GuestbookController::class, 'create'])->name('create');
	Route::post('/store', [GuestbookController::class, 'store'])->name('store');
});

Route::prefix('/newsletter')->name('newsletter.')->group(function () {
	Route::get('/', [NewsletterController::class, 'index'])->name('index');
	Route::post('/store', [NewsletterController::class, 'store'])->name('store');
	Route::get('/unsubscribe/{email}/{token}', [NewsletterController::class, 'unsubscribe'])->name('unsubscribe');
});

Route::prefix('/subscriber')->name('subscriber.')->group(function () {
	Route::get('/', [SubscriberController::class, 'index'])->name('index');
	Route::post('/store', [SubscriberController::class, 'store'])->name('store');
	Route::get('/unsubscribe/{email}/{token}', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe');
});

Route::prefix('/payement')->name('payment.')->group(function () {
	Route::match(['GET', 'POST'], '/callback/url', [PaymentController::class, 'callbackURL'])->name('callback_url');
	Route::get('/return/url', [PaymentController::class, 'returnURL'])->name('return_url');
	Route::get('/cancel/url', [PaymentController::class, 'cancelURL'])->name('cancel_url');

	/**/
	Route::middleware(['auth'])->group(function () {
		Route::match(['GET', 'POST'], '/artist', [PaymentController::class, 'artist'])->name('artist');
		Route::match(['GET', 'POST'], '/photographer', [PaymentController::class, 'photographer'])->name('photographer');
		Route::match(['GET', 'POST'], '/artistic/network', [PaymentController::class, 'artisticNetwork'])->name('artistic_network');
	});
	/**/
});


/** */
Route::prefix('parametres')->name('settings.')->middleware(['auth'])->group(function () {
	Route::get('/', [SettingsController::class, 'index'])->name('index');
	Route::get('/suppression/compte', [SettingsController::class, 'removingAccount'])->name('removing_account');
	Route::get('/activation/tfa', [SettingsController::class, 'enablingTFA'])->name('enabling_tfa');
});
/** */

Route::prefix('/crons')->name('crons.')->group(function () {
	Route::get('/dbbackup', [CronsController::class, 'dbbackup'])->name('dbbackup');
});

Route::prefix('/bookcast')->name('bookcast.')->middleware(['auth'])->group(function() {
	Route::get('/', [BookCastController::class, 'index'])->name('index');
	Route::get('/books', [BookCastController::class, 'books'])->name('books');
	Route::get('/castings', [BookCastController::class, 'castings'])->name('castings');
	Route::get('/network', [BookCastController::class, 'network'])->name('network');
	Route::get('/news', [BookCastController::class, 'news'])->name('news');
	Route::get('/elections', [BookCastController::class, 'elections'])->name('elections');
	Route::get('/notebook', [BookCastController::class, 'notebook'])->name('notebook');
	Route::get('/movies', [BookCastController::class, 'movies'])->name('movies');
});

Route::prefix('/boutikart')->name('boutikart.')->middleware(['auth'])->group(function() {
	Route::get('/', [BoutikArtController::class, 'index'])->name('index');
});

Route::prefix('/bonaddress')->name('bonaddress.')->middleware(['auth'])->group(function() {
	Route::get('/', [BonAddressController::class, 'index'])->name('index');
});