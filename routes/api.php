<?php

use Illuminate\Support\Facades\Route;

/*
 * Pour les Administrateurs
 * -----------------------------------------------------------------------------
 */
Route::get('/commandes', 'API\CommandeController@index');
Route::get('/commande', 'API\CommandeController@show');
Route::get('/change-status', 'API\CommandeController@changeStatus');

/*
 * Pour les Partenaires
 * -----------------------------------------------------------------------------
 */


