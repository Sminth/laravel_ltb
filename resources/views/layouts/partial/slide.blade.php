<section class="hero-area hero-slider-4 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="sb-slick-slider" data-slick-setting='{
                    "autoplay": true,
                    "autoplaySpeed": 5000,
                    "slidesToShow": 1,
                    "dots":true
                                     }'>

                     @foreach ($sliders as $i=>$slide)
                     @if ($i%2!=0)
                     <a href="{{$slide->url}}">
                     <div class="single-slide bg-image" data-bg="{{asset($slide->nom)}}">
                        <div class="home-content text-left pl--30">
                            <div class="row">
                                <div class="col-lg-5">
                                    {{-- <span class="title-small">{{$slide->titre}}</span> --}}
                                    <h3 class="title-small">{{$slide->titre}}</h3>
                                    <p style="font-size:25px;color:white">{{$slide->texte}}
                                       </p>


                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                     @else
                     <a href="{{$slide->url}}">
                        @if (!$slide->titre)

                        <div class="single-slide bg-image" data-bg="{{asset($slide->nom)}}">
                        @else

                        <div class="single-slide bg-image bg-overlay--dark" data-bg="{{asset($slide->nom)}}">
                        @endif
                        <div class="home-content text-center">
                            <div class="row justify-content-end">
                                <div class="col-lg-8">
                                    <h1 class="v2">{{$slide->titre}}</h1>
                                    <h2>{{$slide->texte}}</h2>
                                    {{-- <a href="{{$slide->url}}" class="btn btn--yellow">
                                        Shop Now
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                     </a>
                     @endif

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
