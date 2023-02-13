<?php

namespace App\Http\Controllers\Admin\ext;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
     /*
     * liste des commandes
     */
    public function index(Request $request)
    {
        $status = $_GET['status']??'null';
        // $commande = Commande::with(['client', 'adresse.commune', 'detail.taille', 'detail.couleur']);
        $commandes = Commande::where('deleted_at',null);
        if ($status !== 'null') {
            $commandes= Commande::where('deleted_at',null)->where('status', '=', (int)$status)->paginate(10);
        }
        else{
            $commandes= Commande::where('deleted_at',null)->paginate(10);

        }
        // dd($commandes);

        return view("admin_ext.commande",compact('commandes'));
    }

    public function show(Commande $commande)
    {
        /* detail d'une commande */
// dd($commande);
        return view("admin_ext.detail_commande",compact('commande'));

    }
    public function delete(Commande $commande)
    {

        $commande->update(['deleted_at'=>now()]);
        return redirect()->route("commandes");

    }
    public function etat(Commande $commande,$status)
    {

        //dd($status);
        //$st=0;
        if((int)$status==0) $st =2;
        else if((int)$status==1) $st =1;
        $commande->update(['status'=>$st]);

        return redirect()->back();

    }
}
