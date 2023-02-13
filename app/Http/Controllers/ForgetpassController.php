<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgetpassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.forgotpassword');
    }


    public function traitement(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:clients,email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        /* vars */
        $email = trim($request->get('email'));
        /* vérifier l'email */
        /* créer une demande de restauration */
        $token = Str::random(20);
        $passrequest = new PasswordReset();
        $passrequest->email = $email;
        $passrequest->token = $token;
        $saved = $passrequest->save();

        if ($saved) {
            /* envoie du mail */
            $data = [
                'subject' => 'demande de restauration du mot de passe',
                'from' => 'virtus225one@gmail.com',
                'from_name' => 'akylium.com',
                'template' => 'mail.blank',
                'info' => [
                    'contenu' => 'vous venez de demander une restauration du mot de passe de votre compte akylium.com,
                     veuillez cliquer sur le lien ci-dessous pour confirmer .',
                    'lien' => 'http://www.akylium.com/confirm-reset/' . $token,
                    'nom_lien' => 'réinitialiser votre mot de passe'
                ]
            ];
            Mail::to($email)->send(new \App\Mail\sendMail($data));
            /* connexion auto */
            return view('message')->with([
                'message' => 'Nous venons de vous envoyer un mail sur ' . $email . ' , veuillez confirmer la demande .'
            ]);
        }
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function update($token)
    {
        $tokenData = DB::table('password_resets')->where('token', $token)->first();
        if (!is_null($tokenData)) {
            /* changement du mot de passe */
            $client = Clients::where('email', '=', $tokenData->email)->first();
            $client->password = bcrypt("123457");
            $saved = $client->save();
            if ($saved) {
                /* envoie du mail */
                $data = [
                    'subject' => 'nouveau mot de passe',
                    'from' => 'virtus225one@gmail.com',
                    'from_name' => 'akylium.com',
                    'template' => 'mail.blank',
                    'info' => [
                        'contenu' => 'vous venez de demander une restauration du mot de passe de votre compte akylium.com,
                     votre nouveau mot de passe est :  .',
                        'lien' => 'http://www.akylium.com',
                        'nom_lien' => "123457"
                    ]
                ];
                Mail::to($client->email)->send(new \App\Mail\sendMail($data));
            }
        }
        return redirect('/');
    }


}
