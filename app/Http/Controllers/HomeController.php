<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliders::orderBy('id', 'DESC')->get();
        // dd($produits);
        return view('home', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


public function  show_souscription()

{
    return view("produits.souscription");
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function souscription(Request $request)
    {
        // dd($request);
        $data = [
            'subject' => "Nouvelle Demande d'abonnement sur akylium.com",
            'from' => 'akylium.com@gmail.com',
            'from_name' => 'akylium.com',
            'template' => 'mail.souscriptionnew',
            'info' => [
                'fullname' => $request->nom ,

                'date' => now(),
                'email_client' => $request->email,
                'num_client' => $request->tel,
                'lien' => 'http://www.akylium.com/',
                'nom_lien' => 'se connecter'
            ]
        ];
        $email_akylium = \DB::table("settings")->where("name","email")->first()->value;
            $details['type_email'] = 'nouvelle souscription';
            // $details['email'] = "virtus225one@gmail.com";
            $details['email'] = $email_akylium;
            $details['data'] = $data;

            dispatch(new \App\Jobs\SendEmailJob($details));

            session()->flash('alerte', 'Votre demande à bien été envoyé');
        session()->flash('type', 'success');
        session()->put('achat-encours', false);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
