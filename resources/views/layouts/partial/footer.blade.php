<footer class="site-footer">
    @php
    $numero = DB::table('settings')->where('key', 'contact_1')->first()->value; 
    $email = DB::table('settings')->where('key', 'email')->first()->value;
    $facebook = DB::table('settings')->where('key', 'facebook_page')->first()->value;
@endphp

    <div class="footer-bottom">
        <div class="container">
            {{-- <p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
                vel magna volutpat, posuere eros</p> --}}
            <a href="#" class="payment-block">
                {{-- <img src="images/icon/payment.png" alt=""> --}}
            </a>
            <p class="copyright-text">Copyright © 2023 <a href="" class="author">x</a>. Tout droit reservé.
                <br>
                Design By <a href="http://sminth.atwebpages.com/" target="_blank" rel="noopener noreferrer" class="author">E</a></p>
        </div>
    </div>
</footer>