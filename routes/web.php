<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Welcome;
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
$defaults = ['en' => 'en', 'fr' => 'fr'];

Route::redirect('/', '/en');


Route::controller(Welcome::class)->group(function () {
    //App::setLocale($lang);
    Route::get('/{lang}', 'index')->name('welcome');
    Route::get('/{lang}/about', 'about')->name('about');
    Route::get('/{lang}/team', 'team')->name('team');
    Route::get('/{lang}/contact', 'contact')->name('contact');
});






// path: page d'accueil en anglais
/* Route::get('/{lang}', function ($lang) use ($defaults) {
    App::setLocale($lang);
    return view('welcome', $defaults);
}); */

// path: page d'accueil en français
/* Route::get('/fr', function () {
    return view('welcomefr', ['fr' => 'fr']);
}); */

