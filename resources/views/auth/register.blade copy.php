@extends('layouts.app')
@extends('layouts.app')
@section('title','inscription')

@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            <form action="{{route('register.traitement')}}" method="post" class="col-11 col-md-6">
            {{ csrf_field() }}
            <!-- l'entete -->
                <div class="form-header">
                    <div class="row">
                        <div class="col-6 no-active text-center">
                            <a href="{{route('login.index')}}">Déjà inscrit ?</a>
                        </div>
                        <div class="col-6 active text-center">
                            <a href="">Inscrivez-vous</a>
                        </div>
                    </div>
                </div>
                <!-- le corps 
                <div class="mt-3">
                    <h6 class="text-center text-uppercase mt-3 mb-3">Inscrivez-vous avec </h6>

                    <center class="multi-button  p-3" style="border:none">

                        {{-- <a href="#" class="btn" id="bt"> <i class="fab fa-instagram fa-2x"></i></a>
                        &nbsp;&nbsp;&nbsp; --}}
                        {{-- <a href="{{ url('auth/facebook') }}" class="btn" id="bt"> <i class="fab fa-facebook fa-2x"></i></button></a>
                        &nbsp;&nbsp;&nbsp; --}}
                        <a href="{{ url('auth/google') }}" class="btn" id="bt"> <i class="fab fa-google fa-2x"></i></button></a>

                    </center>
                </div> -->
               
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="row">
                                    <div class="col-lg-5 form-group">
                                        <label for="nom">Nom</label>
                                        <input name="nom" type="text" id="nom" maxlength="40" value="{{ old('nom') }}"
                                               required>
                                        @if($errors->has('nom'))
                                            <small class="text-warning help is-danger text-center">{{ $errors->first('nom') }}</small>
                                        @endif
                                    </div>

                                    <div class="col-lg-7 form-group">
                                        <label for="prenoms">Prenoms</label>
                                        <input name="prenom" type="text" id="prenom" maxlength="40"
                                               value="{{ old('prenom') }}" required>
                                        @if($errors->has('prenom'))
                                            <small class="text-warning help is-danger text-center">{{ $errors->first('prenom') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="email">Email</label>
                                    <input name="email" type="email" id="email" maxlength="40"
                                           value="{{ old('email') }}"
                                           required>
                                    @if($errors->has('email'))
                                        <small class="text-warning help is-danger text-center">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <label for="password">Mot de Passe</label>
                                        <input name="password" type="password" id="password" maxlength="30" required>
                                        @if($errors->has('password'))
                                            <p class="text-warning help is-danger text-center">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-block btn-register">s'inscrire</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <h6 class="text-center text-uppercase mt-3 mb-3 hr">OU</h6>
                            <style> .hr { align-items: center; display: flex; text-align: center;}.hr::before,.hr::after { border-top: .0625em solid; content: "";flex: 1;margin: 0 .5em;}</style>
                            <div class="text-center">
                               <a href="{{ url('auth/google') }}" class=""> <button type="button" class="btn btn-danger btn-block col-12" style="outline: none"><i class="fab fa-google text-white float-left"></i> INSCRIVEZ - VOUS AVEC GOOGLE</button></a>
                            </div>
                       
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection