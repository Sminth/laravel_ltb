<?php

namespace App\Http\Controllers;
use App\Wishlist;

use App\Clients;
use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $client=Auth::user();
        $adresse_client =\App\Models\Adresse::where('id_client', $client->id)->first();
        if($adresse_client!=null){
            $commune = \App\Models\Communes::where('code',$adresse_client->code_commune)->first();
            $ville_client = \App\Models\Villes::where('code',$commune->code_ville)->first()->nom;
            $commune_client=$commune->nom;
            }
            else {
                $commune_client=null;
                $ville_client = null;
          }
          $wishlists = Wishlist::where("id_client", "=", $client->id)->orderby('id', 'desc')->get();
          $commandes = DB::table('commandes')->where('id_client',$client->id)
          ->where('id_client', '=', $client->id)
          ->orderBy('created_at', 'desc')
          ->simplePaginate(15);
          
    
        // session()->flash('alerte', 'Bienvenu '.$client->nom.' !');
        // session()->flash('type', 'success');

        return view('client.index',[
            "adresse" => $adresse_client,
            "client" => $client,
            'commune' => $commune_client,
            'ville' =>$ville_client,
            'wishlist'=>$wishlists,
            'commandes' => $commandes
        ]);
       
    }

    /***
     * aller sur la page modifier mot de passe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {
        return view('client.password');
    }

    /**
     * aller sur la page des commandes du client
     */
    public function commande()
    {
        $id = Auth::User()->id;
        $commandes = DB::table('commandes')->where('id_client',$id)
            // ->join('detailcommandes', 'commandes.id', '=', 'detailcommandes.id_commande')
            // ->join('produits','produits.code','=','detailcommandes.code_prod')
            // ->where('id_client', '=', $id)
            ->simplePaginate(15)
            ->orderBy('created_at', desc);
            
        return view('client.order')->with([
            'commandes' => $commandes
        ]);
    }

    public function detail_commande(Commande $commande){
        $client = Auth::user();
        $articles = DB::table('detailcommandes')->where('id_commande', $commande->id)->get();
        $nbre_article = count($articles);

        // $adresse_client = \App\Models\Adresse::where('id_client', $client->id)->first();
        // $commune = \App\Models\Communes::where('code', $adresse_client->code_commune)->first();
        // $ville_client = \App\Models\Villes::where('code', $commune->code_ville)->first()->nom;
        // $commune_client = $commune->nom;

  
        return view('client.detailcommande', compact("articles","nbre_article","commande"));

   
    }
    /***
     * aller sur la page adresse
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adresse()
    {
        $client=Auth::user();
        $adresse_client =\App\Models\Adresse::where('id_client', $client->id)->first();
        if($adresse_client!=null){
        $commune = \App\Models\Communes::where('code',$adresse_client->code_commune)->first();
        $ville_client = \App\Models\Villes::where('code',$commune->code_ville)->first()->nom;
        $commune_client=$commune->nom;
        }
        else {
            $commune_client=null;
            $ville_client = null;
        }
        return view('client.adresse',[
            "adresse" => $adresse_client,
            "client" => $client,
            'commune' => $commune_client,
            'ville' =>$ville_client,
        ]);
    }

    /***
     * aller sur la page info
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info()
    {
        return view('client.info');
    }

    /***
     * aller sur la page info
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function historique()
    {
        return view('client.info');
    }

    /***
     * aller sur la page info
     * @return string
     */
    public function updatepassword(Request $request)
    {
        if (Auth::Check()) {
            $request_data = $request->All();
            $current_password = Auth::User()->password;
            if (Hash::check($request_data['motdepasse'], $current_password)) {
                $user_id = Auth::User()->id;
                $obj_user = Clients::find($user_id);
                $obj_user->password = Hash::make($request_data['nouveau_motdepasse']);
                $obj_user->save();
                session()->flash('alerte', 'mot de passe modifié avec succès .');
                session()->flash('type', 'success');
                return back()->withInput()->with([
                    'success' => 'mot de passe modifié avec succès .',
                ]);
            }
            session()->flash('alerte', 'l\'ancien mot de passe est incorrect');
            session()->flash('type', 'error');
            return back()->withInput()->withErrors([
                'message' => 'l\'ancien mot de passe est incorrect ',
            ]);
        }
            session()->flash('alerte', 'veillez vous connectez ');
            session()->flash('type', 'info');
        return back()->withInput()->withErrors([
            'message' => 'veillez vous connectez  ',
        ]);
    }

    /***
     * mise à jour des infos
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateinfo(Request $request)
    {
        if (Auth::Check()) {
            $request_data = $request->All();
            $current_password = Auth::User()->password;
            // dd("ok");
            $user_id = Auth::User()->id;
            $obj_user = Clients::find($user_id);
            $obj_user->nom = trim($request_data['nom']);
            $obj_user->prenom = trim($request_data['prenom']);
            $obj_user->telephone = trim($request_data['telephone']);
            $obj_user->email = trim($request_data['email']);
            if($request_data['motdepasse']){
                if (Hash::check($request_data['motdepasse'], $current_password)) {
                   
                    $obj_user->password = Hash::make($request_data['nouveau_motdepasse']);
                    
                }
                else{
                session()->flash('alerte', 'l\'ancien mot de passe est incorrect');
                session()->flash('type', 'error');
                return back()->withInput()->withErrors([
                    'message' => 'l\'ancien mot de passe est incorrect ',
                ]);
            }
            }
            $obj_user->save();

            session()->flash('alerte', 'mise à jour effectuée .');
            session()->flash('type', 'success');
            return back()->withInput()->with([
                'success' => 'mise à jour effectuée .',
            ]);

        }
            session()->flash('alerte', 'veillez vous connectez ');
            session()->flash('type', 'info');
        return back()->withInput()->withErrors([
            'message' => 'veuillez vous connectez  ',
        ]);
    }
    /***
     * mise à jour de l'adresse
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateadresse()
    {
        if (Auth::Check()) {
            $client=Auth::user();
            $adresse_client =\App\Models\Adresse::where('id_client', $client->id)->first();
            $commune_id = \App\Models\Communes::where('code',request()->input('commune'))->first()->code;

            // $ville_client = \App\Models\Villes::where('code',$commune->code_ville)->first()->nom;

            if($adresse_client!=null){
                
            DB::table('adresses')
                ->where('id_client', $client->id)
                ->update([
                        'code_commune' => $commune_id,
                        'description' => request()->input('desc'),
                        "updated_at"=> now()
                    ]);
            }
            else{
                DB::table('adresses') ->insert([
                        'id_client'=> $client->id,
                        'code_commune' => $commune_id,
                        'description' => request()->input('desc'),
                        "created_at"=> now(),"updated_at"=> now()
                    ]);
            }
            session()->flash('alerte', 'mise a jour effectuée !');
            session()->flash('type', 'info');
            return redirect()->route('client.index')->with('toast_success','mise a jour !');
        }
        session()->flash('alerte', 'veillez vous connectez ');
        session()->flash('type', 'info');
        return back()->withInput()->withErrors([
            'message' => 'veillez vous connectez  ',
        ]);
    }

    /**
     * deconnexion
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deconnexion()
    {
            session()->flash('alerte', 'deconnecté');
            session()->flash('type', 'info');
        Auth::logout();
        return redirect('/');
    }

}
