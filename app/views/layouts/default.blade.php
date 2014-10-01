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
        <meta property = "og:image"       content = "images/social-logo.png">

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
                                    <a href = "#" class = "Button js-departmentButton">Nydalen</a>
                                </li>
                                <li>
                                    <a href = "#" class = "Button js-departmentButton">Romsås</a>
                                </li>
                            </ul>
                            <a href = "{{ URL::route( 'contact' ) }}" class = "Button Button--order js-orderButton">Bestill</a>
                        @endif

                    </div>
                </div>
            </div>
        </header>

        <section class = "DynamicWrap">
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
                                <a href = "{{ URL::route( 'prices' ) }}" class = "{{ Request::url() == route( 'prices' ) ? 'isActive' : '' }}">Priser</a>
                            </li>
                            <li>
                                <a href = "{{ URL::route( 'about' ) }}" class = "{{ Request::url() == route( 'about' ) ? 'isActive' : '' }}">Om Oss</a>
                            </li>
                            <li>
                                <a href = "{{ URL::route( 'contact' ) }}" class = "{{ Request::url() == route( 'contact' ) ? 'isActive' : '' }}">Kontakt</a>
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
                                <div>
                                    <strong>Hverdager</strong>
                                    <span>10-20</span>
                                </div>
                                <div>
                                    <strong>Lørdager</strong>
                                    <span>10-16</span>
                                </div>
                                @if ( Request::url() != route( 'contact' ) )
                                    <a href = "#" class = "Button--small">Bestill time</a>
                                @else
                                    <div class = "DepartmentsBrief-map">
                                        <div class = "map" id = "map-nydalen"></div>
                                        <p><a href = "#">Maridalsveien 264<br />0872 Oslo</a></p>
                                    </div>
                                @endif
                           </li>
                            <li class = "DepartmentsBrief-item">
                                <h2>Avdeling Romsås</h2>
                                <div>
                                    <strong>Hverdager</strong>
                                    <span>10-20</span>
                                </div>
                                <div>
                                    <strong>Lørdager</strong>
                                    <span>10-16</span>
                                </div>
                                @if ( Request::url() != route( 'contact' ) )
                                    <a href = "#" class = "Button--small">Bestill time</a>
                                @else
                                    <div class = "DepartmentsBrief-map">
                                        <div class = "map" id = "map-romsas"></div>
                                        <p><a href = "#">Romsås Senter 1<br />0970 Oslo</a></p>
                                    </div>
                                @endif
                            </li>
                            <li class = "DepartmentsBrief-item">
                                <h2>Smilet Ditt Tannklinikk</h2>
                                <h3>
                                    <span class = "Icon Icon--phone"></span><a href = "tel:40609160" class = "DepartmentsBrief-phone">22 22 55 55</a>
                                </h3>
                                <ul class = "SocialIcons">
                                    <li class="SocialIcons-icon">
                                        <a href = "https://www.facebook.com/smiletditttannkinikk" class = "facebook" target = "_blank"><span class = "Icon Icon--facebook"></span></a>
                                    </li>
                                    <li class="SocialIcons-icon">
                                        <a href = "" class = "twitter"><span class = "Icon Icon--twitter"></span></a>
                                    </li>
                                    <li class="SocialIcons-icon">
                                        <a href = "" class = "google"><span class = "Icon Icon--google"></span></a>
                                    </li>
                                </ul>
                           </li>
                        </ul>
                    </div>
                </section>

            </main>
            <footer class = "FooterBar">
                <div class="PageContainer">
                    <div class = "FooterBar-info">© 2014 - Design av Mango Pixel</div>
                </div>
            </footer>
        </section>

        {{ HTML::script( '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' ) }}
        {{ HTML::script( 'js/jquery.pickmeup.min.js' ) }}
        {{ HTML::script( 'js/main.js' ) }}

    </body>

</html>