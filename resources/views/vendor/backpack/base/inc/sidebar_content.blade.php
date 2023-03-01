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
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('adresse') }}'><i class='nav-icon la la-question'></i> Adresses</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('clients') }}'><i class='nav-icon la la-question'></i> Clients</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('communes') }}'><i class='nav-icon la la-question'></i> Communes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('messages') }}'><i class='nav-icon la la-question'></i> Messages</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('password-reset') }}'><i class='nav-icon la la-question'></i> Password resets</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('sliders') }}'><i class='nav-icon la la-question'></i> Sliders</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('villes') }}'><i class='nav-icon la la-question'></i> Villes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('blog') }}'><i class='nav-icon la la-question'></i> Blogs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('categ-galerie') }}'><i class='nav-icon la la-question'></i> Categ galeries</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('chambres') }}'><i class='nav-icon la la-question'></i> Chambres</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contacts') }}'><i class='nav-icon la la-question'></i> Contacts</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('demande') }}'><i class='nav-icon la la-question'></i> Demandes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('documents-legaux') }}'><i class='nav-icon la la-question'></i> Documents legauxes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faqs') }}'><i class='nav-icon la la-question'></i> Faqs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('helpers') }}'><i class='nav-icon la la-question'></i> Helpers</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('hotel') }}'><i class='nav-icon la la-question'></i> Hotels</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('ligne-reservations') }}'><i class='nav-icon la la-question'></i> Ligne reservations</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('message') }}'><i class='nav-icon la la-question'></i> Messages</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('newsletter') }}'><i class='nav-icon la la-question'></i> Newsletters</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('noter') }}'><i class='nav-icon la la-question'></i> Noters</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('notification') }}'><i class='nav-icon la la-question'></i> Notifications</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('paiement') }}'><i class='nav-icon la la-question'></i> Paiements</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('partenaires') }}'><i class='nav-icon la la-question'></i> Partenaires</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('promo-code') }}'><i class='nav-icon la la-question'></i> Promo codes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('reservations') }}'><i class='nav-icon la la-question'></i> Reservations</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('services') }}'><i class='nav-icon la la-question'></i> Services</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('style') }}'><i class='nav-icon la la-question'></i> Styles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('term-condition') }}'><i class='nav-icon la la-question'></i> Term conditions</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('type-lit') }}'><i class='nav-icon la la-question'></i> Type lits</a></li>