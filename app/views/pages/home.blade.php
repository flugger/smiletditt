@extends( 'layouts.default' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <ul class = "ServicesBrief">
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'survey' ) }}" class = "CircularIcon CircularIcon--survey">
                        <span class = "Icon Icon--survey"></span>
                    </a>
                    <h2>Undersøkelse</h2>
                    <p>Besøk oss for en konsultasjon hvor vi undersøker din tannhelse.</p>
                    {{ link_to_route( 'survey', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'emergency' ) }}" class = "CircularIcon CircularIcon--emergency">
                        <span class = "Icon Icon--emergency"></span>
                    </a>
                    <h2>Akutt hjelp</h2>
                    <p>Har du akutte smerter og trenger umiddelbar hjelp hjelper vi deg.</p>
                    {{ link_to_route( 'emergency', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'whitening' ) }}" class = "CircularIcon CircularIcon--whitening">
                        <span class = "Icon Icon--whitening"></span>
                    </a>
                    <h2>Tannbleking</h2>
                    <p>Lyst på et hvitere smil? Vi hjelper deg å få glansen tilbake.</p>
                    {{ link_to_route( 'whitening', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'gum' ) }}" class = "CircularIcon CircularIcon--gum">
                        <span class = "Icon Icon--gum"></span>
                    </a>
                    <h2>Tannkjøtt</h2>
                    <p>Vi behandler periodonti og andre tannkjøttskader.</p>
                    {{ link_to_route( 'gum', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'implant' ) }}" class = "CircularIcon CircularIcon--implant">
                        <span class = "Icon Icon--implant"></span>
                    </a>
                    <h2>Tannimplantat</h2>
                    <p>Har du mistet en tann kan vi hjelpe deg med å erstatte den.</p>
                    {{ link_to_route( 'implant', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'rootCanal' ) }}" class = "CircularIcon CircularIcon--rootCanal">
                        <span class = "Icon Icon--rootCanal"></span>
                    </a>
                    <h2>Rotfylling</h2>
                    <p>Ved infiserte nerver kan vi hjelpe til med å tette rotkanalene.</p>
                    {{ link_to_route( 'rootCanal', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'cleaning' ) }}" class = "CircularIcon CircularIcon--cleaning">
                        <span class = "Icon Icon--cleaning"></span>
                    </a>
                    <h2>Tannrens</h2>
                    <p>Tannrens ved bruk av nymoderne behandlingsmetoder.</p>
                    {{ link_to_route( 'cleaning', 'Les mer' ) }}
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'xRay' ) }}" class = "CircularIcon CircularIcon--xRay">
                        <span class = "Icon Icon--xRay"></span>
                    </a>
                    <h2>Digital Røntgen</h2>
                    <p>Trygg, effektiv og smertefri røntgenundersøkelse.</p>
                    {{ link_to_route( 'xRay', 'Les mer' ) }}
                </li>
            </ul>
        </div>
    </section>

@stop