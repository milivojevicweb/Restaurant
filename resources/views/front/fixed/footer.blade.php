<div id="margin"></div>

        <footer>

                <div class="omotac">
                    <img src="{{ asset('images/logoSmall.png')}}" alt="marco restaurant logo"/>
                <div id="footerTop">
                <ul id="organisation" class="footerColumn">
                        <li class="footerHeader">ORGANISATION</li>
                        <li>MARCO is one of the country’s most celebrated restaurants; the creation of leading Serbian restaurant group, Fink, and Executive Chef Marko Milivojevic.</li>
                        <li class="socialNetwork"> <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                        <a href="https://twitter.com"><i class="ikonica fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                        <li>© 2024 Marko Milivojevic</li>

                    </ul>
                    <ul id="sitemap" class="footerColumn">
                        <li class="footerHeader">SITEMAP</li>
                        <li><a href="{{ url('/') }}">HOME</a></li>
                        <li><a href="{{ url('/products') }}">MENU</a></li>
                        <li><a href="{{ url('/news') }}">NEWS</a></li>
                        <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                        <li><a href="{{ url('/login') }}">LOGIN/REGISTRATION</a></li>
                        <li><a href="{{ url('/author') }}">AUTHOR</a></li>
                        <li><a href="{{ asset('dokumentacija.pdf') }}">Dokumentacija</a></li>
                    </ul>

                    <ul id="information" class="footerColumn">
                        <li class="footerHeader">INFORMATION</li>
                        <li>Monday - Thursday</li>
                        <li>11:00 AM - 9:00 PM</li>
                        <li>Friday - Saturday</li>
                        <li>11:00 AM - 5:00 PM</li>
                    </ul>

                    <ul id="location" class="footerColumn">
                        <li class="footerHeader">LOCATION</li>
                        <li><i class="fa fa-phone"></i> +38163 111 1111</li>
                        <li><i class="fa fa-envelope"></i> restaurant@marco.com</li>
                        <li><i class="fa fa-map-marker"></i>Smederevska Palanka, Serbia</li>


                    </ul>
                </div>
                <div class="cistac"></div>

            </div>



            <div class="cistac"></div>
        </footer>




        <div id="scrollToTop"><i class='fa fa-angle-up'></i><div>

        @section('javascript')
        <script type="text/javascript" src="{{asset('js/reservation.js')}}"></script>
        @show


    </body>
</html>
