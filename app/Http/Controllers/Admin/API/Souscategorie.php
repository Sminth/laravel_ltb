<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Souscategories;
use Illuminate\Http\Request;

class SouscategorieController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        $form = collect($request->input('form'))->pluck('value', 'name');

        return [];
        // if no code_categorie has been selected, show no options
        if (! $form['code_categorie']) {
            return [];
        }

        // if a code_categorie has been selected, only show Souscategories in that code_categorie
        if ($form['code_categorie']) {
            $options = $options->where('code_cat', $form['code_categorie']);
        }

        if ($search_term) {
            $results = $options->where('nom', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = $options->paginate(10);
        }

        return $results;
    }

    public function show($code)
    {
        return Souscategories::find($code);
    }
}