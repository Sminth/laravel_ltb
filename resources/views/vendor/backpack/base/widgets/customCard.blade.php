
@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_start')
<style>
    .wrapper {
  position: relative;
  perspective: 40em;
  display: grid;
  transform-style: preserve-3d;
}

.card2 {
  grid-area: 1 / 1;
  height: 100px;
  width: 250px;
  transform: translateX(10px) rotateY(25deg) rotateX(10deg);
  background: white;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  cursor:pointer;
  color: #000;
  text-transform: uppercase;
  font-size: 30px;
  font-weight: 900;
  backface-visibility: hidden;
  box-shadow: 0 10px 30px -3px rgba(0,0,0,.1);
}



.card2 .enclosed {
  background: #000;
  line-height: 1;
  color: rgba(249, 198, 26, 1);
  padding: 0 5px;
  display: inline-block;
  transform: translate(-1px, 1px) scale(0.75);
  transform-origin: right center;
  
}

.wrapper:before {
  --bw: 9px;
  grid-area: 1 / 1;
  content: '';
  backface-visibility: hidden;
  height: 100%;
  width: 87%;
  margin-top: calc(-1 * var(--bw));
  margin-left: calc(-1 * var(--bw));
  background: transparent;
  transform: translateX(-20px) rotateY(-30deg) rotateX(15deg) scale(1.03);
  pointer-events: none;
  border: var(--bw) solid #000;
  box-sizing: content-box;
}


.wrapper:hover > .div,
.wrapper:hover:before {
  transform: none;
}


.wrapper > .div,
.wrapper:before {
  will-change: transform;
  transition: .3s transform cubic-bezier(.25,.46,.45,1);
}
#ch{
    font-size: 20px;
}

</style>
@php
    $produits_en_ligne = count(DB::table('produits')->where('enabled',1)->get()); 
    $client_inscrit =count(DB::table('clients')->get())
@endphp
<div class="row mt-5">
    <div class="col-lg-3 col-sm-6 mb-5">
        <div class="wrapper align-content-center" >
            <div class="card2 div">
                <div class="row col-12" style="height: 100%">
                    <div class="col-5" style="background-color: green;">

                        <i class="las la-comment-dollar mt-3" style="color: white;font-size:50px"></i> </div>
                    <div class="col-7" style="">
                        <span id="ch">150000 Fr</span><br>
                        <span style="font-size: 10px;color:grey">Revenue du mois</span>
                    </div>
                </div>
             <!-- <h1>
                <span class="enclosed">Cut</span>out
              </h1>-->
            </div>
          </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-5">
        <div class="wrapper align-content-center">
            <div class="card2 div">
                <div class="row col-12 " style="height: 100%">
                    <div class="col-5" style="background-color: orange;">
                        <i class="las la-cart-arrow-down mt-3" style="color: white;font-size:50px"></i>
                        </div>
                    <div class="col-7" style="">
                        <span id="ch">3000</span><br>
                        <span style="font-size: 10px;color:grey">Produits vendus</span>
                    </div>
                </div>
             <!-- <h1>
                <span class="enclosed">Cut</span>out
              </h1>-->
            </div>
          </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-5">
        <div class="wrapper align-content-center">
            <div class="card2 div">
                <div class="row col-12" style="height: 100%">
                    <div class="col-5" style="background-color: blue;">
                        <i class="lab la-opencart mt-3" style="color: white;font-size:50px"></i>

                        </div>
                    <div class="col-7" style="">
                        <span id="ch">{{$produits_en_ligne}}</span><br>
                        <span style="font-size: 10px;color:grey">Produits en ligne</span>
                    </div>
                </div>
             <!-- <h1>
                <span class="enclosed">Cut</span>out
              </h1>-->
            </div>
          </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-5">
        <div class="wrapper align-content-center">
            <div class="card2 div">
                <div class="row col-12" style="height: 100%">
                    <div class="col-5" style="background-color: red;">
                        <i class="las la-user-friends mt-3" style="color: white;font-size:50px"></i>
                        
                        </div>
                    <div class="col-7" style="">
                        <span id="ch">{{$client_inscrit}}</span><br>
                        <span style="font-size: 10px;color:grey">Clients inscrits</span>
                    </div>
                </div>
             <!-- <h1>
                <span class="enclosed">Cut</span>out
              </h1>-->
            </div>
          </div>
    </div>
  </div>
  <!--<div class="{{ $widget['class'] ?? 'well mb-2' }}"> v
    {!! $widget['content'] !!}
  </div>-->
@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_end')