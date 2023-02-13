@extends('layouts.app')
@section('title','inscription')

@section('content')
<main class="page-section inner-page-sec-padding-bottom">
    <div class="container">
 <center>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                <!-- Login Form s-->
                <form action="{{route('register.traitement')}}" method="post">
                    {{ csrf_field() }}
                    <div class="login-form">
                        <h4 class="login-title text-center">Inscrivez-vous</h4>
                        {{-- <p><span class="font-weight-bold text-center ">creer un nouveau compte</span></p> --}}
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="nom">Nom</label>
                                
                                        @if($errors->has('nom'))
                                            <small class="text-warning help is-danger text-center">{{ $errors->first('nom') }}</small>
                                        @endif
                                <input name="nom"  class="mb-0 form-control" type="text" id="nom"
                                    placeholder="Entrez votre nom" value="{{ old('nom') }}" required>

                            </div>
                            <div class="col-md-12 col-12 mb--15">
                                <label for="prenom">prenom</label>
                                
                                        @if($errors->has('nom'))
                                            <small class="text-warning help is-danger text-center">{{ $errors->first('prenom') }}</small>
                                        @endif
                                <input name="prenom"  class="mb-0 form-control" type="text" id="prenom"
                                    placeholder="Entrez votre prenom" value="{{ old('prenom') }}" required>

                            </div>
                            <div class="col-12 mb--20">
                                <label for="email">Email</label>
                                @if($errors->has('email'))
                                <small class="text-warning help is-danger text-center">{{ $errors->first('email') }}</small>
                            @endif
                                <input value="{{ old('email') }}"
                                required name="email" class="mb-0 form-control" type="email" id="email" placeholder="Entrez votre adresse email">
                            </div>
                            <div class="col-lg-6 mb--20">
                                <label for="password">Password</label>
                                @if($errors->has('password'))
                                <p class="text-warning help is-danger text-center">{{ $errors->first('password') }}</p>
                            @endif
                                <input class="mb-0 form-control" name="password"  required type="password" id="password" placeholder="Entrez votre mot de passe">
                            </div>
                            {{-- <div class="col-lg-6 mb--20">
                                <label for="password">Repeat Password</label>
                                <input class="mb-0 form-control" type="password" id="repeat-password" placeholder="Repeat your password">
                            </div> --}}
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outlined col-12">s'inscrire</a>
                            </div>
                            <div class=" col-12  text-center mt-2">
                                <span class="text-uppercase text-center hr">ou</span>
                                <style> .hr { align-items: center; display: flex; text-align: center;}.hr::before,.hr::after { border-top: .0625em solid #00A19B; content: "";flex: 1;margin: 0 .5em;}</style>
                           </div>
                            <div class="col-md-12 mt-3">
                                <a href="{{ url('auth/google') }}" class="col-12 btn btn-danger"><i class="fab fa-google text-white float-left"></i> &nbsp;&nbsp;&nbsp; S'INSCRIRE AVEC GOOGLE</a>
                            </div>
                            <div class="col-12 mt-3">
                                <p>vous avez deja un compte ? <a href="{{route('login.index')}}" style="color:#EE008C">connectez vous</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </div>
</main>
@endsection