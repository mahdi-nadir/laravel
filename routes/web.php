<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::redirect('/', '/en/welcome');

// path: page d'accueil en anglais
Route::get('/{lang}/{action}', function ($lang, $action) use ($defaults) {
    App::setLocale($lang);
    if ($action == 'welcome' || $action == '') {
        return view('welcome', $defaults);
    } elseif ($action == 'about') {
        return view('about', $defaults);
    } elseif ($action == 'contact') {
        return view('contact', $defaults);
    } elseif ($action == 'team') {
        return view('team', $defaults);
    }
});


// path: page d'accueil en français
/* Route::get('/fr', function () {
    return view('welcomefr', ['fr' => 'fr']);
}); */

