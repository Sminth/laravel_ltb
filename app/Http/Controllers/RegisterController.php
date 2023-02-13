<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
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

    public function traitement(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:3|max:50',
            'prenom' => 'required|min:3|max:50',
            'email' => 'required|email|max:50|unique:clients',
            'password' => 'required|min:6|max:255'
        ]);

        if ($validator->fails()) {
            session()->flash('alerte', 'erreur');
            session()->flash('type', 'error');
            return redirect()->back()->withErrors($validator->errors());
        }

        /* vars */
        $nom = trim($request->nom);
        $prenom = trim($request->get('prenom'));
        $email = trim($request->get('email'));
        $password = $request->get('password');

        /* vérifier l'email */
        $verif = Clients::where('email', '=', $email)->first();
        if ($verif) {
            session()->flash('alerte', 'email invalide');
            session()->flash('type', 'error');
            return back()->withInput()->withErrors([
                'invalid' => 'Un utilisateur existe déjà avec la même adresse mail.',
            ]);
        }
        /* création d'un compte */
        $client = new Clients();
        $client->nom = $nom;
        $client->prenom = $prenom;
        $client->email = $email;
        $client->password = bcrypt($password);
        $client->enabled = 1;
        $saved = $client->save();
        if ($saved) {
            /* envoie du mail */
            $data = [
                'subject' => 'Inscription sur akylium.com',
                'from' => 'virtus225one@gmail.com',
                'from_name' => 'akylium.com',
                'template' => 'mail.welcome',
                'info' => [
                    'fullname' => $nom . ' ' . $prenom,
                    'contenu' => 'vous venez de créer un compte sur www.akylium.com , vous pouvez vous connectez dès maintenant avec vos identifiants .',
                    'lien' => 'http://www.akylium.com/',
                    'nom_lien' => 'se connecter'
                ]
            ];
            Mail::to(request('email'))->send(new \App\Mail\sendMail($data));
            /* connexion auto */
            auth()->attempt([
                'email' => $email,
                'password' => $password
            ]);
            session()->flash('alerte', 'Bienvenue ' . \Auth::user()->nom);
            session()->flash('type', 'success');
            /* si il y a un achat en cours */
            if (session()->get('achat-encours')) {
                session()->forget('achat-encours');
                return redirect('/panier');
            }
            return redirect('/mon-compte');
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
