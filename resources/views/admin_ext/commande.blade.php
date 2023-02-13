@extends('backpack::layouts.top_left')
@section('content')

    <div id="app">
        <div>
            <main class="main mt-2">
              <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb bg-transparent justify-content-end p-0">
                  <li class="breadcrumb-item text-capitalize">commande</li>
                  <li class="breadcrumb-item text-capitalize active" aria-current="page">
                    <a href="/commandes">Liste des commandes</a></li>
                </ol>
              </nav>
            </main>

            <div class="container-fluid animated fadeIn">
              <div class="row">
                <div class="card p-4" style="width: 100%">
                    <div class="row d-flex" style="justify-content: space-between; ">
                        <div class="col-12">

                        <span class="">Status de la commande</span>

                        @php
                            if(isset($_GET['status'])){
                                switch ($_GET['status']) {
                                    case '0':
                                        $st ="nouvelle commande";
                                        break;
                                    case '1':
                                        $st ="commande confirmée";
                                        break;
                                    case '1':
                                        $st ="commande annulée";
                                        break;

                                    default:
                                        $st ="tout";
                                        break;
                                }
                            }
                            else {
                                $st ="tout";
                            }
                        @endphp
                        <select class="select" id="select" style="float: right">
                          <option label="{{$st}}" value="null">
                          </option>
                          <option label="tout" value="null">
                        </option>
                          <option  label="nouvelle commande" value="0" >
                            {{-- <option  label="nouvelle commande" value="0" <?php if($_GET['status'] == '0') echo"selected"; ?>> --}}
                          </option>
                          <option label="commande confirmée" value="1" >
                          </option>
                          <option label="commande annulée" value="2" >
                          </option>
                        </select>
                      </div>
                    </div>
{{-- @dd($commandes) --}}
                    <hr>
                    <div class="mt-2">
                      <div class="row">
                        <div class="col-sm-12">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher par nom...">
                            <table id="myTable" class="table table-siped table-bdered">
                              <tr class="header" style="color: #909399;background:white">
                                <th style="">#ID</th>
                                <th style="">Client</th>
                                <th style="">Téléphone</th>
                                <th style="">Montant</th>
                                <th style="">Date</th>
                                <th style="">Status commande</th>
                                <th style=""></th>
                              </tr>
                              @foreach ($commandes as $cmd)

                              @php
                                  $client = \DB::table('clients')->where('id',$cmd->id_client)->first();
                                  $adresse = \DB::table('adresses')->where('id',$cmd->id_adr)->first();
                              @endphp
                              <tr>
                                  {{-- @dd($cmd) --}}
                                <td>{{$cmd->id}}</td>
                                <td>{{$client->nom}} {{$client->prenom}}</td>
                                <td>{{$client->telephone}}</td>
                                <td>{{$cmd->montant}} f cfa</td>
                                <td>{{$cmd->created_at}}</td>
                                <td>
                                    @if ($cmd->status==0)
                                    <span class="text-primary">en attente</span>
                                    @elseif ($cmd->status==1)
                                    <span class="text-success">confirmer</span>
                                    @else
                                    <span class="text-danger">annuler</span>

                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/commandes/{{$cmd->id}}/details" style="text-transform: none;text-decoration:none;"><i class="la la-eye"></i></a>
                                    <a href="/admin/commandes/delete/{{$cmd->id}}" style="text-transform: none;text-decoration:none;"><i class="la la-trash"></i></a>
                                </td>
                              </tr>
@endforeach

                            </table>
                            {{-- <br> --}}
                            {{$commandes->links()}}

                        </div>
                      </div>

                    </div>
                  </div>
              </div>
            </div>
          </div>
    </div>
<style>
    .select{
        /* padding: 10px 20px 10px 40px; */

background-color: #FFF;
background-image: none;
border-radius: 4px;
border: 1px solid #DCDFE6;
box-sizing: border-box;
color: #606266;
display: inline-block;
font-size: inherit;
height: 40px;
width: 250px;

/* line-height: 40px; */
outline: 0;
/* padding: 0 15px; */
    /* padding-right: 15px; */
transition: border-color .2s cubic-bezier(.645,.045,.355,1);
cursor: pointer;
    }
    #myInput {
 /* Do not repeat the icon image */
  width: 250px;
color: #606266;

  float: right;
  font-size: 16px; /* Increase font-size */
  padding: 5px 5px 5px 5px; Add some padding
  border: 1px solid #DCDFE6;
 /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
.pagination-block {
    font-size: 22px;
    font-weight: 400;
     /* border: 2px solid #ebebeb; */ */
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    background: transparent
}
ul{list-style: none;}
.pagination-block .pagination-btns {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-flex: 100%;
    -ms-flex: 100%;
    flex: 100%;
    line-height: 28px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}


.zmdi-chevron-left:before{content:'<'}
.zmdi-chevron-right:before{content:'>'}
@media (min-width: 480px) {
    .pagination-block .pagination-btns {
        line-height: auto;
    }
}

 .pagination-block .pagination-btns li {
     padding: 25px;
    position: relative;
}

.pagination-block .pagination-btns li::before {
    content: "";
    border-top: 2px solid #EE008C;
    /* border-color: */
    position: absolute;
    width: 20px;
    left: 0;
    /* padding: 10px; */
    right: 0;
    bottom: 14px;
    margin: auto;
    /* transform: rotate(45deg) */
    opacity: 0;
}

.pagination-block .pagination-btns li.active::before {
    opacity: 1;
}

.pagination-block .pagination-btns li.active .single-btn:before,
.pagination-block .pagination-btns li.active .single-btn:after {
    opacity: 1;
}

.pagination-block .pagination-btns .single-btn {
    color: #555;
    background: none;
    font-size: 22px;
    border: none;
    padding: 0;
    font-weight: 600;
    width: 54px;
    height: 48px;
    border-radius: 0;
    -webkit-border-radius: 0;
    line-height: 48px;
    position: relative;
    text-align: center;
}
/* .pagination-block .pagination-btns .single-btn:before {
    content: "";
    top: -2px;
    bottom: -2px;
    left: 0;
    right: 0;
    /* border: 2px solid #EE008C;
    position: absolute;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    opacity: 0;
} */

.pagination-block .pagination-btns .single-btn:after {
    content: "";
    border: 9px solid;
    border-color: transparent transparent #fff transparent;
    position: absolute;
    width: 18px;
    left: 0;
    right: 0;
    top: -18px;
    margin: auto;
    z-index: 2;
    opacity: 0;
}

.pagination-block .pagination-btns .single-btn:hover,
.pagination-block .pagination-btns .single-btn.current {
    color: #EE008C;
}

.pagination-block .pagination-btns .single-btn i {
    font-size: 18px;
    position: relative;
    top: 2px;
    display: inline-block;
}

.pagination-block .pagination-btns .single-btn.prev-btn i {
    margin-right: 10px;
}

.pagination-block .pagination-btns .single-btn.next-btn i {
    margin-left: 10px;
} */
</style>

<script>
    document.getElementById('select').addEventListener('change', function() {
        location.href='/admin/liste-commandes?status='+this.value;
});

    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          txtValue2 = td2.textContent || td2.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 ) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

@endsection
