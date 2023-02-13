@extends('layouts.app')
@section('title')
    Page not found.
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <div class="col-12">
            <div class="">
                <div class="text-center">
                    <h5>ERREUR 404</h5>
                    <p class="display-4">PAGE NOT FOUND</p>
                    <a href="{{url('/')}}" class="btn btn-outline-dark">retourner sur la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>
@endsection