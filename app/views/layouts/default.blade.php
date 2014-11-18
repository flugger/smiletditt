<!doctype html>

<html lang = "no">

    <head>

        <meta charset = "utf-8">

        <meta name = "description" content = "Smilet Ditt Tannklinikk - Tannlege i Oslo, med avdelinger i Nydalen og Romsås. Undersøkelse, akutt hjelp, tannbleking og mer.">
        <meta name = "keywords"    content = "tannlege, nydalen, romsås, tannleger, tannklinikk, tannbehandling, billig, undersøkelse, rotfylling, tannbleking, røntgen">
        <meta name = "viewport"    content = "initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <meta property = "og:url"         content = "http://smiletditt.no">
        <meta property = "og:title"       content = "Smilet Ditt Tannklinikk">
        <meta property = "og:description" content = "Tannlegesenter i Oslo, med avdelinger i Nydalen og Romsås. Undersøkelse, akutt hjelp, tannbleking og mer.">
        <meta property = "og:image"       content = "images/thumbnail.jpg">

        <title>@yield( 'pageTitle', 'Smilet Ditt Tannklinikk - Tannlege i Oslo, med avdelinger i Nydalen og Romsås' )</title>

        {{ HTML::style( 'css/styles.css' ) }}

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0MiOKdTZjEpplEikH5PF7CV7g0p-KK2o"></script>
        <script type="text/javascript">
            function initialize() {
                var nydalenOptions = {
                    center: { lat: 59.947338, lng: 10.759844 },
                    zoom: 15,
                    disableDefaultUI: true
                };
                var romsasOptions = {
                    center: { lat: 59.963488, lng: 10.892491 },
                    zoom: 15,
                    disableDefaultUI: true
                };

                var map1 = new google.maps.Map( document.getElementById( 'map-nydalen' ), nydalenOptions );
                var map2 = new google.maps.Map( document.getElementById( 'map-romsas' ), romsasOptions );

                var nydalenMarker = {
                    position: { lat: 59.947338, lng: 10.759844 }
                }

                var marker1 = new google.maps.Marker( nydalenMarker );
                marker1.setMap( map1 );

                var romsasMarker = {
                    position: { lat: 59.963488, lng: 10.892491 }
                }

                var marker2 = new google.maps.Marker( romsasMarker );
                marker2.setMap( map2 );
            }
              google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>

    <body>

        <header class = "BrandIntro">
            <div class="BrandIntro-shade">
                <div class="PageContainer">
                    <div class="BrandIntro-wrap">
                        <h1 class = "BrandIntro-logo">
                            <a href = "{{ URL::route( 'home' ) }}">
                                <img src = "images/logo-smilet-ditt.svg" alt = "Smilet Ditt" width = "400" height = "100">
                            </a>
                        </h1>

                        @if ( Request::url() != route( 'contact' ) )
                            <h3>Vennligst velg avdeling:</h3>
                            <ul class = "BrandIntro-menu">
                                <li>
                                    <a href = "#" class = "Button js-departmentButton departmentButton-nydalen">Nydalen</a>
                                </li>
                                <li>
                                    <a href = "#" class = "Button js-departmentButton departmentButton-romsas">Romsås</a>
                                </li>
                            </ul>
                            <a href = "{{ URL::route( 'contact', [ 'nydalen' ] ) }}#info" class = "Button Button--order js-orderButton orderButton-nydalen">Bestill time</a>
                            <a href = "{{ URL::route( 'contact', [ 'romsas' ] ) }}#info" class = "Button Button--order js-orderButton orderButton-romsas">Bestill time</a>
                        @endif

                    </div>
                </div>
            </div>
        </header>

        <section id = "info" class = "DynamicWrap">
            <header class = "NavBar">
                <div class="PageContainer">
                    <h1 class = "NavBar-logo">
                        <a href = "{{ URL::route( 'home' ) }}">
                            <img src = "images/logo-smilet-ditt.svg" alt = "Smilet Ditt" width = "180" height = "45">
                        </a>
                    </h1>
                    <nav class = "NavBar-nav">
                        <ul>
                            <li>
                                <a href = "{{ URL::route( 'home' ) }}" class = "{{ Request::url() == route( 'home' ) ? 'isActive' : '' }}">Tjenester</a>
                            </li>
                            <li>
                                <a href = "{{ URL::route( 'prices' ) }}#info" class = "{{ Request::url() == route( 'prices' ) ? 'isActive' : '' }}">Priser</a>
                            </li>
                            <li>
                                <a href = "{{ URL::route( 'about' ) }}#info" class = "{{ Request::url() == route( 'about' ) ? 'isActive' : '' }}">Om Oss</a>
                            </li>
                            <li>
                                <a href = "{{ URL::route( 'contact' ) }}#info" class = "{{ Request::url() == route( 'contact' ) ? 'isActive' : '' }}">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <main>

                @yield( 'content' )

                <section class = "MainSection MainSection--split">
                    <div class = "PageContainer">
                        <ul class="DepartmentsBrief">
                            <li class = "DepartmentsBrief-item">
                                <h2>Avdeling Nydalen</h2>
                                <h3>
                                    <span class = "Icon Icon--phone"></span><a href = "tel:40609160" class = "DepartmentsBrief-phone">22 23 03 03</a>
                                </h3>
                                <div>
                                    <strong>Hverdager</strong>
                                    <span>10-18</span>
                                </div>
                                <div>
                                    <strong>Lørdager</strong>
                                    <span>10-16</span>
                                </div>
                                @if ( Request::url() != route( 'contact' ) )
                                    <a href = "{{ URL::route( 'contact', [ 'nydalen' ] ) }}#info" class = "Button--small">Bestill time</a>
                                @else
                                    <div class = "DepartmentsBrief-map">
                                        <div class = "map" id = "map-nydalen"></div>
                                        <p>
                                            <span><strong>Maridalsveien 264</strong> - 0872 Oslo<br></span>
                                            <a href = "https://www.google.no/maps/place/Maridalsveien+264,+0872+Oslo/@59.9473383,10.7598443,17z/data=!3m1!4b1!4m2!3m1!1s0x46416e1a9154ac3b:0xbb82da5680a976c5">Forstørr kart</a>
                                        </p>
                                    </div>
                                @endif
                           </li>
                            <li class = "DepartmentsBrief-item">
                                <h2>Avdeling Romsås</h2>
                                <h3>
                                    <span class = "Icon Icon--phone"></span><a href = "tel:40609160" class = "DepartmentsBrief-phone">22 10 83 00</a>
                                </h3>
                                <div>
                                    <strong>Hverdager</strong>
                                    <span>10-18</span>
                                </div>
                                <div>
                                    <strong>Lørdager</strong>
                                    <span>10-16</span>
                                </div>
                                @if ( Request::url() != route( 'contact' ) )
                                    <a href = "{{ URL::route( 'contact', [ 'romsas' ] ) }}#info" class = "Button--small">Bestill time</a>
                                @else
                                    <div class = "DepartmentsBrief-map">
                                        <div class = "map" id = "map-romsas"></div>
                                        <p>
                                            <span><strong>Romsås Senter 1</strong> - 0970 Oslo<br></span>
                                            <a href = "https://www.google.no/maps/place/Roms%C3%A5s+Senter+1,+0970+Oslo/@59.9628436,10.892828,17z/data=!4m2!3m1!1s0x464170099bf827c7:0x13cab2bcbaf35c7a">Forstørr kart</a>
                                        </p>
                                        <p></a></p>
                                    </div>
                                @endif
                            </li>
                            <li class = "DepartmentsBrief-item">
                                <h2>Smilet Ditt Tannklinikk</h2>
                                <ul class = "SocialIcons">
                                    <li class="SocialIcons-icon">
                                        <a href = "https://www.facebook.com/smiletditttannkinikk" class = "facebook" target = "_blank"><span class = "Icon Icon--facebook"></span></a>
                                    </li>
                                    <li class="SocialIcons-icon">
                                        <a href = "https://www.twitter.com/smilet_ditt" class = "twitter"><span class = "Icon Icon--twitter"></span></a>
                                    </li>
                                    <li class="SocialIcons-icon">
                                        <a href = "https://plus.google.com/u/0/105770224646766787528" class = "google"><span class = "Icon Icon--google"></span></a>
                                    </li>
                                </ul>
                           </li>
                        </ul>
                    </div>
                </section>

            </main>
            <footer class = "FooterSection">
                <div class="PageContainer">
                    <div>Enkelte behandlinger gir mulighet for refusjon etter Helfos takster. Ved bruk av faktura påløper 80kr ekstra i fakturagebyr.</div>
                    <div>Avbestilling av oppsatt time må gjøres innen 24 timer viredagen før. Uteblivelse fra time uten avbestilling beslastet med kr 450,- per halvtime.</div>
                    <strong>Vi bruker de samme takstene som den offentlige tannhelsetjenesten.</strong>
                </div>
            </footer>
            <footer class = "FooterBar">
                <div class="PageContainer">
                    <div class = "FooterBar-info"><strong>© 2014</strong> - Design av Mango Pixel</div>
                </div>
            </footer>
        </section>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-56838502-1','auto');ga('send','pageview');
        </script>

        {{ HTML::script( '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' ) }}
        {{ HTML::script( 'js/jquery.pickmeup.min.js' ) }}
        {{ HTML::script( 'js/jquery.icheck.min.js' ) }}
        {{ HTML::script( 'js/main.js' ) }}

    </body>

</html>