@extends('layouts.app')
@section('title','connexion')
@section('content')

<div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center">
        <form action="{{route('request-password')}}" method="post" class="col-11 col-md-5">
            {{ csrf_field() }}
            <div class="form-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="password">demande de restauration du mot de passe</label>
                            <input name="email" type="email"  maxlength="50" required>
                            @if($errors->has('email'))
                                <p class="text-danger ">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                            
                        <div class="form-group">
                            <div class="row align-items-center mb-2">
                                <div class="col-12 ">
                                    <button type="submit" class="btn btn-block btn-register">confirmer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </form>
    </div>
</div>

@endsection