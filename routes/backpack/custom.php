<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('villes', 'VillesCrudController');
    Route::crud('communes', 'CommunesCrudController');
    Route::crud('clients', 'ClientsCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::crud('sliders', 'SlidersCrudController');


    // Route::get('/liste-commandes', 'ext\CommandeController@index')->name('commandes');
    // Route::get('/commandes/{commande}/details', 'ext\CommandeController@show');
    // Route::get('/commandes/{commande}/status/{status}', 'ext\CommandeController@etat');
    // Route::get('/commandes/delete/{commande}', 'ext\CommandeController@delete');


    // ------------------
    // AJAX Chart Widgets
    // ------------------
    Route::get('charts/users', 'Charts\LatestUsersChartController@response');
    Route::get('charts/new-entries', 'Charts\NewEntriesChartController@response');


    Route::crud('user', 'UserCrudController');
    Route::crud('activites', 'ActivitesCrudController');
    Route::crud('galerie', 'GalerieCrudController');
    Route::crud('adresse', 'AdresseCrudController');
    Route::crud('messages', 'MessagesCrudController');
    Route::crud('password-reset', 'PasswordResetCrudController');
    Route::crud('blog', 'BlogCrudController');
    Route::crud('categ-galerie', 'CategGalerieCrudController');
    Route::crud('chambres', 'ChambresCrudController');
    Route::crud('contacts', 'ContactsCrudController');
    Route::crud('demande', 'DemandeCrudController');
    Route::crud('documents-legaux', 'DocumentsLegauxCrudController');
    Route::crud('faqs', 'FaqsCrudController');
    Route::crud('helpers', 'HelpersCrudController');
    Route::crud('hotel', 'HotelCrudController');
    Route::crud('ligne-reservations', 'LigneReservationsCrudController');
    Route::crud('message', 'MessageCrudController');
    Route::crud('newsletter', 'NewsletterCrudController');
    Route::crud('noter', 'NoterCrudController');
    Route::crud('notification', 'NotificationCrudController');
    Route::crud('paiement', 'PaiementCrudController');
    Route::crud('partenaires', 'PartenairesCrudController');
    Route::crud('promo-code', 'PromoCodeCrudController');
    Route::crud('reservations', 'ReservationsCrudController');
    Route::crud('services', 'ServicesCrudController');
    Route::crud('style', 'StyleCrudController');
    Route::crud('term-condition', 'TermConditionCrudController');
    Route::crud('type-lit', 'TypeLitCrudController');
}); // this should be the absolute last line of this file