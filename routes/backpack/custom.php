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


    Route::crud('activites', 'ActivitesCrudController');
    Route::crud('galerie', 'GalerieCrudController');
}); // this should be the absolute last line of this file