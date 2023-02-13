@extends('layouts.app')
@section('title','Service client | akylium CI')
@section('content')
    <div class="container mb-5">
        <div class="border border-top-0 border-left-0 border-right-0 border-dark mt-5">
            <h3 class="text-center">Puis-je contacter le service client par téléphone ?</h3>
        </div>
        <div class="pt-5">
            @php $liens= DB::table('settings')->get(); @endphp
            <div class="text-left">
                <p class="font-weight-normal">
                    {{-- @dd($liens) --}}
                    Vous pouvez nous joindre au (+225) <span class="font-weight-bolder">{{$liens[4]->value}}</span> 7j/7, entre 8H00 et 17H00 (heure GMT).
                    <br>
                    ou par mail : {{$liens[5]->value}}  <br>
                    Nous sommes également disponibles sur facebook et par whatsapp.
                </p>
            </div>
        </div>
    </div>
@endsection 