@extends('backpack::layouts.top_left')
@section('content')
    <div id="app">
        @php
        $client = \DB::table('clients')->where('id',$commande->id_client)->first();
        $adresse = \DB::table('adresses')->where('id',$commande->id_adr)->first();
        $commune = \DB::table('communes')->where('code',$adresse->code_commune)->first();
        $details = \DB::table('detailcommandes')->where('id_commande',$commande->id)->get();
    @endphp
        <div class="container-fluid">
            <main class="main mt-2">
                <nav aria-label="breadcrumb" class="d-none d-lg-block">
                  <ol class="breadcrumb bg-transparent justify-content-end p-0">
                    <li class="breadcrumb-item text-capitalize">commande</li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">
                      <a href="/commandes">Liste des commandes</a></li>
                  </ol>
                </nav>
              </main>
            <div class="card bg-white p-4">
              <div class="row">
                <div class="col-6 text-left">
                  <h1 class="text-primary">Commande</h1>
                  <small class="text-black-50">Numero de la commande #h {{ $commande->id }}</small>
                </div>

                <div class="col-6">
                  <div class="d-flex justify-content-end pb-3 pl-2">
                    <select id="select" class="select" style="float: right">
                        <option label="... Actions">
                        </option>
                        <option label="annuler la commande" value="0">
                        </option>
                        <option label="accepter la commande" value="1">
                        </option>

                      </select>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-6 text-left">
                  <h4>Client</h4>
                  <div v-if="order.client">
                    {{ $client->nom }} {{ $client->prenom }}<br>
                    {{ $client->email }}<br>
                    {{ $client->telephone }}<br>
                    @if ($adresse)

                    <div> <br>
                      <b>Commune </b> {{ $commune->nom}}<br>
                      <b>Adresse de Livraison</b> : {{ $adresse->description }}<br>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-md-6  text-right">
                  <h5>
                    status de la commande
                  </h5>
                  @if ($commande->status==0)
                                    <h3 class="text-primary"><i
                                        class="el-icon-loading"></i>en attente</h3>
                                    @elseif ($commande->status==1)
                                    <h3 class="text-success"><i
                                        class="el-icon-success"></i>confirmé</h3>
                                    @else
                                    <h3 class="text-danger"><i
                                        class="el-icon-error"></i>annulée</h3>
                                        
                                    @endif

                </div>
              </div>
              {{-- @dd($details) --}}
              <div class="row  bg-white mt-5">
                <div class="col-12">
                  <table class="table table-bordered w-100">
                    <tr>
                      <th>ID</th>
                      <!-- <th>Boutique</th> -->
                      <th>produit</th>

                      <th>quantité</th>
                      <th>prix de vente</th>
                      <th>location ?</th h>
                      <th>total</th>
                    </tr>
                    @foreach ($details as $detail )
                    @php
                        $produit = \DB::table('produits')->where('code',$detail->code_prod)->first();
                    @endphp
                    <tr v-for="detail in order.detail">
                        <td>{{$detail->id}} </td>
                        <td> {{$produit->nom }}</td>
                        <td> {{$detail->quantite }}</td>
                        <td>{{$detail->prix_vente }} FCFA</td>
                        <td>
                          @if ($detail->type_paye=="louer1" or $detail->type_paye=="louer2" )
                              oui
                          @else
                          non
                          @endif
                        </td>
                        <td>{{($detail->quantite * $detail->prix_vente) }} FCFA</td>
                      </tr>
                    @endforeach

                  </table>
                </div>
              </div>


            </div>
        </div>

    </div>
    <style>
          .select{
        /* padding: 10px 20px 10px 40px; */

background-color: #FFF;
background-image: none;
border-radius: 4px;
border: 1px solid #DCDFE6;
box-sizing: border-box;
color: #606266;
display: inline-block;
font-size: inherit;
height: 40px;
width: 250px;

/* line-height: 40px; */
outline: 0;
/* padding: 0 15px; */
    /* padding-right: 15px; */
transition: border-color .2s cubic-bezier(.645,.045,.355,1);
cursor: pointer;
    }
    </style>
    <script>
        document.getElementById('select').addEventListener('change', function() {
            if(this.value) location.href='status/'+this.value;
});
    </script>
@endsection
