<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/artikel/{slug}', 'ArtikelController@index')
                ->name('artikel');

Route::get('/cabang-olahraga/{cabang_olahraga_id}/pemain', 'PemainController@index')
                ->name('cabor-pemain');
Route::get('/cabang-olahraga/profile-pemain/{pemain_id}', 'ProfilPemainController@index')
                ->name('profile-pemain');

Route::get('/cabang-olahraga/{cabang_olahraga_id}/pelatih', 'PelatihController@index')
                ->name('cabor-pelatih');

Route::get('/foto', 'FotoController@index')
                ->name('foto');
Route::get('/foto/{nama_cabor}', 'DetailFotoController@index')
                ->name('detail-foto');

Route::get('/video', 'VidioController@index')
                ->name('video');
Route::get('/video/{nama_cabor}', 'VidioController@show')
                ->name('detail-video');

Route::get('/jadwal-latihan', 'JadwalController@index')
    ->name('jadwal-latihan');

Route::get('/about', 'AboutController@index')
    ->name('about');

Route::get('/contact', 'ContactController@index')
    ->name('contact');
Route::post('/contact', 'ContactController@create')
        ->name('contact-create');

Route::get('/berita', 'BeritaController@index')
    ->name('berita');

Route::prefix('admin')
        ->middleware('auth', 'admin')
        ->namespace('Admin')
        ->group(function(){
          Route::get('/', 'DashboardController@index')
        ->name('dashboard');

          Route::resource('posts', PostController::class);
          Route::resource('messages', MessageController::class);
          Route::resource('cabang-olahraga', CabangOlahragaController::class);
          Route::resource('players', PlayerController::class);
          Route::resource('coachs', CoachController::class);
          Route::resource('gallery', GalleryController::class);
        //   Route::resource('videos', VideoController::class);
});

Auth::routes();

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
