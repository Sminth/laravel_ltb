@extends('layouts.app')
@section('title','connexion')
@section('content')

    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            <form action="{{route('login.traitement')}}" method="post" class="col-11 col-md-6">
            {{ csrf_field() }}
            <!-- l'entete -->
                <div class="form-header">
                    <div class="row">
                        <div class="col-6 active text-center">
                            <a href="#">Connexion</a>
                        </div>
                        <div class="col-6 no-active text-center">
                            <a href="{{route('register.index')}}">Inscrivez-vous</a>
                        </div>
                    </div>
                </div>
                <!-- le corps -->
                
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-12">

                            
                            @if($errors->has('invalid'))
                                <h3 class="text-warning help is-danger text-center">{{ $errors->first('invalid') }}</h3>
                            @endif
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" id="email" maxlength="40" value="{{ old('email') }}"
                                       required>
                                @if($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">mot de passe</label>
                                <input name="password" type="password" id="password" maxlength="40" required>
                                @if($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="row align-items-center mb-2">
                                    <div class="col-12 col-lg-6">
                                        <button type="submit" class="btn btn-block btn-register">se connecter</button>
                                    </div>
                                    <div class="col-12 col-lg-6 text-lg-right text-center mt-2 mt-md-0">
                                        <a href="{{url('/motdepasse-perdu')}}" class="text-uppercase">mot de passe
                                            oublié ?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3">
                    <h6 class="text-center text-uppercase mt-3 mb-3 hr">OU</h6>
                    <style> .hr { align-items: center; display: flex; text-align: center;}.hr::before,.hr::after { border-top: .0625em solid; content: "";flex: 1;margin: 0 .5em;}</style>
                    <div class="text-center">
                       <a href="{{ url('auth/google') }}" class=""> <button type="button" class="btn btn-danger btn-block col-12" style="outline: none"><i class="fab fa-google text-white float-left"></i> SE CONNECTER AVEC GOOGLE</button></a>
                    </div>
               
                    </div>
                </div>
                
                

            </form>
        </div>
    </div>

@endsection