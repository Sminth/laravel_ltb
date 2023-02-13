@extends('layouts.app')
@section('title','connexion')
@section('content')

<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
 <center>
           
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="{{route('login.traitement')}}" method="post" >
                    {{ csrf_field() }}
                    <!-- l'entete -->
                    
                    <div class="login-form">
                        
                        <h4 class="login-title text-center">Connexion</h4>
                        {{-- <p><span class="font-weight-bold">I am a returning customer</span></p> --}}
                        @if($errors->has('invalid'))
                        <h3 class="text-danger help is-danger text-center">{{ $errors->first('invalid') }}</h3>
                    @endif
                        <div class="row">
                           
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email">Email</label>
                                @if($errors->has('email'))
                                    <p class="help text-danger is-danger">{{ $errors->first('email') }}</p>
                                @endif
                               
                                <input class="mb-0 form-control"  name="email" type="email" id="email" placeholder="Entrez votre email..." value="{{ old('email') }}"
                                    required>
                            </div>
                            <div class="col-12 mb--5">
                                <label for="password">Password</label>
                                @if($errors->has('password'))
                                <p class="help text-danger is-danger">{{ $errors->first('password') }}</p>
                            @endif
                                <input class="mb-0 form-control" name="password" type="password" id="login-password" placeholder="Entrez votre mot de passe">
                            </div>
                            <div class="col-12 mb--10">
                                <a href="{{url('/motdepasse-perdu')}}" style="color: #EE008C"><i>mot de passe
                                    oublié ?</i></a>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit"  class="col-12 btn btn-outlined">se connecter</button>
                            </div>
                           <div class=" col-12  text-center mt-2">
                                <span class="text-uppercase text-center hr">ou</span>
                                <style> .hr { align-items: center; display: flex; text-align: center;}.hr::before,.hr::after { border-top: .0625em solid #00A19B; content: "";flex: 1;margin: 0 .5em;}</style>
                           </div>
                            <div class="col-md-12 mt-3">
                                <a href="{{ url('auth/google') }}" class="col-12 btn btn-danger"><i class="fab fa-google text-white float-left"></i> &nbsp;&nbsp;&nbsp; SE CONNECTER AVEC GOOGLE</a>
                            </div>
                            <div class="col-12 mt-3">
                                <p>vous n'avez pas encore de compte ? <a href="{{route('register.index')}}" style="color:#EE008C">inscrivez vous</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
</main>
@endsection