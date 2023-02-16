<?php

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

Route::get('/', 'HomeController@index')->name('accueil');



/* route login et register */
Route::get('/register', 'RegisterController@index')->name('register.index');
Route::post('/traitement-register', 'RegisterController@traitement')->name('register.traitement');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/traitement-login', 'LoginController@traitement')->name('login.traitement');

Route::get('auth/google', 'LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'LoginController@handleGoogleCallback');

Route::get('auth/facebook', 'LoginController@redirectToFacebook');
Route::get('facebook/callback', 'LoginController@handleFacebookCallback');



/* demande de restauration du mot de passe */
Route::get('/motdepasse-perdu', 'ForgetpassController@index')->name('forgot-password');
Route::post('/demande-restauration', 'ForgetpassController@traitement')->name('request-password');
Route::get('/confirm-reset/{token}', 'ForgetpassController@update')->name('confirm-request');
/* pages statiques
Route::view('/contact', 'static.contact')->name('contact');
Route::view('/politiqueretour', 'static.politiqueretour')->name('politiqueretour');
Route::view('/apropos', 'static.apropos')->name('apropos');
Route::view('/conditions', 'static.conditions')->name('conditions');
Route::view('/confidentialite', 'static.confidentialité')->name('confidentialité');


// route protegé par auth middleware
Route::group([
    'middleware' => 'App\Http\Middleware\Auth',
], function () {
    Route::get('/mon-compte', 'ClientController@index')->name('client.index');
    // Route::get('/mes-commandes', 'ClientController@commande')->name('client.commande');
    // Route::get('/commande/details/{commande}', 'ClientController@detail_commande')->name('client.commande.details');

    /* mot de passe
    Route::get('/changer-motdepasse', 'ClientController@password')->name('client.motdepasse');
    Route::post('/update-password', 'ClientController@updatepassword')->name('client.updatepassword');

    /* information personnelle
    Route::get('/info', 'ClientController@info')->name('client.info');
    Route::post('/update-info', 'ClientController@updateinfo')->name('client.updateinfo');

    /* adresse
    Route::get('/adresse', 'ClientController@adresse')->name('client.adresse');
    Route::post('/update-adresse', 'ClientController@updateadresse')->name('client.updateadresse');

    /* deconnexion
    Route::get('/deconnexion', 'ClientController@deconnexion')->name('client.logout');


});

/* pour la page vuejs
Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array)config('backpack.base.web_middleware', 'web'),
        (array)config('backpack.base.middleware_key', 'admin')
    )
], function () { // custom admin routes
    /* pour vuejs
    Route::view('/v/{vue_capture?}', 'vue.index')->where('vue_capture', '[\/\w\.-]*');
});
*/

