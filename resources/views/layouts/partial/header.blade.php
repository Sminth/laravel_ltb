<div class="site-header header-4 mb--20 d-none d-lg-block">
    @php
        $numero = DB::table(['settings'])->where('key', 'contact_2')->first()->value;
        $whatsapp = DB::table('settings')->where('key', 'contact_1')->first()->value;
        $email = DB::table('settings')->where('key', 'email')->first()->value;
        $facebook = DB::table('settings')->where('key', 'facebook_page')->first()->value;
    @endphp
