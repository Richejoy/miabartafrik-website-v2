<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CronsController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\BookCastController;
use App\Http\Controllers\BoutikArtController;
use App\Http\Controllers\BonAddressController;

use App\Http\Controllers\ImageController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PhotographerController;

use Illuminate\Support\Facades\Artisan;

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
	});

	Route::match(['GET', 'POST'], '/completed/{email}/{token}', [PageController::class, 'completed'])->name('completed');

	Route::match(['GET', 'POST'], '/donate', [PageController::class, 'donate'])->name('donate');

	Route::match(['GET', 'POST'], '/lock/screen', [PageController::class, 'lockScreen'])->middleware(['lock'])->name('lock_screen');

	Route::get('/logout', [PageController::class, 'logout'])->name('logout');
	Route::get('/lock', [PageController::class, 'lock'])->name('lock');
});

Route::prefix('/user')->name('user.')->group(function() {
	Route::get('/', [UserController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'], '/{user}/show', [UserController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'], '/{user}/edit', [UserController::class, 'edit'])->name('edit');
});

Route::prefix('/contact')->name('contact.')->group(function () {
	Route::get('/', [ContactController::class, 'index'])->name('index');
	Route::post('/store', [ContactController::class, 'store'])->name('store');
});

Route::prefix('/newsletter')->name('newsletter.')->group(function () {
	Route::get('/', [NewsletterController::class, 'index'])->name('index');
	Route::post('/store', [NewsletterController::class, 'store'])->name('store');
	Route::get('/unsubscribe/{email}/{token}', [NewsletterController::class, 'unsubscribe'])->name('unsubscribe');
});

Route::prefix('/payement')->name('payment.')->group(function () {
	Route::post('/callback/url', [PaymentController::class, 'callbackURL'])->name('callback_url');
	Route::get('/return/url', [PaymentController::class, 'returnURL'])->name('return_url');
	Route::get('/cancel/url', [PaymentController::class, 'cancelURL'])->name('cancel_url');

	/**/
	Route::middleware(['auth'])->group(function () {
		
	});
	/**/
});

/** */
Route::prefix('settings')->name('settings.')->middleware(['auth'])->group(function () {
	Route::get('/', [SettingsController::class, 'index'])->name('index');
	Route::get('/removing/account', [SettingsController::class, 'removingAccount'])->name('removing_account');
	Route::get('/enabling/tfa', [SettingsController::class, 'enablingTFA'])->name('enabling_tfa');
});
/** */

Route::prefix('/crons')->name('crons.')->group(function () {
	Route::get('/dbbackup', [CronsController::class, 'dbbackup'])->name('dbbackup');
});

Route::prefix('/bookcast')->name('bookcast.')->middleware(['auth'])->group(function() {
	Route::get('/', [BookCastController::class, 'index'])->name('index');
	Route::get('/books', [BookCastController::class, 'books'])->name('books');
	Route::get('/visuoshop', [BookCastController::class, 'visuoshop'])->name('visuoshop');
	Route::get('/networks', [BookCastController::class, 'networks'])->name('networks');
	Route::get('/castings', [BookCastController::class, 'castings'])->name('castings');
	Route::get('/notebook', [BookCastController::class, 'notebook'])->name('notebook');
	Route::get('/elections', [BookCastController::class, 'elections'])->name('elections');
	Route::get('/movies', [BookCastController::class, 'movies'])->name('movies');
	Route::get('/news', [BookCastController::class, 'news'])->name('news');
});

Route::prefix('/boutikart')->name('boutikart.')->middleware(['auth'])->group(function() {
	Route::get('/', [BoutikArtController::class, 'index'])->name('index');
});

Route::prefix('/bonaddress')->name('bonaddress.')->middleware(['auth'])->group(function() {
	Route::get('/', [BonAddressController::class, 'index'])->name('index');
});

Route::prefix('/pictures')->name('pictures.')->middleware(['auth'])->group(function() {
	Route::get('/', [ImageController::class, 'index'])->name('index');
	Route::get('/show/{image}', [ImageController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'], '/edit/{image}', [ImageController::class, 'edit'])->name('edit');
});


Route::prefix('/admins')->name('admins.')->middleware(['auth'])->group(function() {
	
});
Route::resource('admins', AdminController::class)->middleware('auth');


Route::prefix('/members')->name('members.')->middleware(['auth'])->group(function() {
	Route::get('/package/{package?}', [MemberController::class, 'package'])->name('package');
});
Route::resource('members', MemberController::class)->middleware('auth');


Route::prefix('/artists')->name('artists.')->middleware(['auth'])->group(function() {
	Route::get('/package/{package?}', [ArtistController::class, 'package'])->name('package');
});
Route::resource('artists', ArtistController::class)->middleware('auth')->except(['destroy']);


Route::prefix('/partners')->name('partners.')->middleware(['auth'])->group(function() {
	Route::get('/package/{package?}', [PartnerController::class, 'package'])->name('package');
});
Route::resource('partners', PartnerController::class)->middleware('auth')->except(['destroy']);


Route::prefix('/photographers')->name('photographers.')->middleware(['auth'])->group(function() {
	Route::get('/package/{package?}', [PhotographerController::class, 'package'])->name('package');
});
Route::resource('photographers', PhotographerController::class)->middleware('auth')->except(['destroy']);