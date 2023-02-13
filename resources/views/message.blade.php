@extends('layouts.app')
@section('title','connexion')
@section('content')

    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            @if(isset($message) && !empty($message))
                <div class="col-12 col-lg-6 text-center">
                    <i class="fa fa-check-circle fa-5x text-center text-success" aria-hidden="true"></i>
                    <h3 class="text-success text-center">{{ $message }}</h3>
                </div>
            @endif
        </div>
    </div>

@endsection