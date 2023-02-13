{{-- <div class="text-top container-fluid p-0">
    @php $liens= DB::table('settings')->get(); @endphp
    <div class="bg-dark">
        <p class="text-white text-center p-1 p-lg-2">besoin d'aide pour commander ? <br class="d-sm-none"> Appelez le :
            <span class="text-orange"> <i class="fas fa-phone"></i> {{$liens[4]->value}}</span>
        </p>
    </div>
</div> --}}

<div class="container-fluid p-0 mt-3">
    <!-- header -->
    <div class="header">
        <div class="row align-items-center">
            <!-- logo -->
            <div class="logo">
                <span class="order-0 order-lg-1 d-lg-none" style="m" id="open-menu"><i class="fas fa-bars"></i></span>
                <a href="#" class="ml-5">
                    <img src="{{asset('images/fondation.jpeg')}}" onclick="window.location.href='/'"
                         class="img-fluid order-1 order-lg-0" alt="">
                </a>
            </div>
            <!-- formulaire de recherche -->
            {{-- <div class="col order-3 order-lg-2">
                <form action="{{route('produits.recherche')}}" class="search">
                    <div class="input-group">
                        <input name="q" value="{{request()->q ?? ''}}" type="text" placeholder="rechercher un article">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
            <!--  -->
            {{-- <div class="header-right order-2 order-lg-3 col-8 col-lg-4 text-right mt-3">
                <div class="d-inline-flex">
                    <ul class="d-flex align-items-center">
                        @if (!auth()->check())
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{route('login.index')}}">se connecter</a>
                                        <a class="dropdown-item" href="{{url('/register')}}">créer un compte</a>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="col">
                                <div class="dropdown">
                                    <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <i class="arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{url('/info')}}">mes informations</a>
                                        <a class="dropdown-item" href="{{url('/mes-commandes')}}">mes commandes</a>
                                        <a class="dropdown-item" href="{{url('/changer-motdepasse')}}">changer mot de passe</a>
                                        <a class="dropdown-item" href="{{url('/deconnexion')}}">deconnexion</a>
                                    </div>
                                </div>
                            </li>
                        @endif
                        <li class="col">
                            <a href="{{route('wishlist.index')}}" class="btn-card">
                                <i class="fas fa-heart"></i>
                                <span class="total">{{\Auth::user() ?count(\Auth::user()->wishlist):0}} </span>
                            </a>
                        </li>
                        <li class="col">
                            <a href="{{route('cart.index')}}" class="btn-card">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="total">{{Cart::count()}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
            
        <div class="row header-bottom d-none d-lg-block bg-warning mt-4">
            <ul class="list-unstyled">
                {{-- <li><a href="#">nouveautés</a></li> --}}
                {{--@foreach (DB::table('categories')->take(6)->get() as $item=>$sous)
                    <li><a href="{{url('/produits?categorie=yes&'.$sous->code.'=on')}}">{{$sous->nom}}</a></li>
                @endforeach--}}

                <li><a href="#">Accueil</a></li>
                <li><a href="#">A Propos</a></li>
                <li><a href="#">Boutique</a></li>
                
                    @if (!auth()->check())
                    <li>
                        <div class="dropdown">
                            <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                <i class="arrow"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{route('login.index')}}">se connecter</a>
                                <a class="dropdown-item" href="{{url('/register')}}">créer un compte</a>
                            </div>
                        </div>
                    </li>
                    @else
                    <li>
                        <div class="dropdown">
                            <a href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                <i class="arrow"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{url('/info')}}">mes informations</a>
                                <a class="dropdown-item" href="{{url('/mes-commandes')}}">mes commandes</a>
                                <a class="dropdown-item" href="{{url('/changer-motdepasse')}}">changer mot de passe</a>
                                <a class="dropdown-item" href="{{url('/deconnexion')}}">deconnexion</a>
                            </div>
                        </div>
                    </li>
                    @endif
                    
                        {{--<li>
                            <a href="{{route('wishlist.index')}}" class="btn-card">
                                <i class="fas fa-heart"></i>
                                <span class="total">{{\Auth::user() ?count(\Auth::user()->wishlist):0}} </span>
                            </a>
                        </li>--}}
                        <li>
                            <a href="{{route('cart.index')}}" class="btn-card">
                                <i class="fas fa-shopping-basket"></i>
                                <span class="total">{{Cart::count()}}</span>
                            </a>
                        </li>
                </div>
            </ul>
        </div>
    </div>
    

<!-- sidebar mobile -->
    @include('layouts.partial.sidebar')
</div>


<div class="container-fluid p-0 mt-3">
    <!-- header -->
  <!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light">

  <a class="navbar-brand" href="#!">
    <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="30" alt="mdb logo">
  </a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
    aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Breadcrumbs -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="waves-effect" href="#!">Home</a></li>
    <li class="breadcrumb-item"><a class="waves-effect" href="#!">Templates</a></li>
    <li class="breadcrumb-item active"><a class="waves-effect" href="#!">E-commerce</a></li>
  </ol>
  <!-- Breadcrumbs -->

  <!-- Links -->
  <div class="collapse navbar-collapse" id="basicExampleNav1">

    <!-- Right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#!" class="nav-link navbar-link-2 waves-effect">
          <span class="badge badge-pill red">1</span>
          <i class="fas fa-shopping-cart pl-0"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="true">
          <i class="united kingdom flag m-0"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#!">Action</a>
          <a class="dropdown-item" href="#!">Another action</a>
          <a class="dropdown-item" href="#!">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="#!" class="nav-link waves-effect">
          Shop
        </a>
      </li>
      <li class="nav-item">
        <a href="#!" class="nav-link waves-effect">
          Contac
        </a>
      </li>
      <li class="nav-item">
        <a href="#!" class="nav-link waves-effect">
          Sign in
        </a>
      </li>
      <li class="nav-item pl-2 mb-2 mb-md-0">
        <a href="#!" type="button"
          class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
      </li>
    </ul>

  </div>
  <!-- Links -->