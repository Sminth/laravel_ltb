<li class="nav-title">Production</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if(backpack_user()->hasRole('admin'))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('clients') }}'><i class='nav-icon la la-user'></i> Clients</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('sliders') }}'><i class='nav-icon la la-images'></i> Sliders</a></li>
@else
@endif



<li class="nav-title">Paramètres de base</li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('marques') }}'><i class="las la-registered"></i> Marques</a></li> --}}
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('couleurs') }}'><i class='nav-icon la la-palette'></i> Couleurs</a></li> --}}
<li class='nav-item'><a class='nav-link' href="{{ backpack_url('villes') }}"><i class="las la-city"></i> Villes</a></li>
<li class='nav-item'><a class='nav-link' href="{{ backpack_url('communes') }}"><i class="las la-city"></i> Communes</a></li>


<!-- Users, Roles, Permissions -->


@if(backpack_user()->hasRole('admin'))
<li class="nav-title">Paramètres utilisateurs</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-keybase'></i> <span>Settings</span></a></li>
@endif

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('activites') }}'><i class='nav-icon la la-question'></i> Activites</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('galerie') }}'><i class='nav-icon la la-question'></i> Galeries</a></li>