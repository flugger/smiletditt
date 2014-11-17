@extends( 'layouts.default' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <ul class = "ServicesBrief">
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'survey' ) }}#info" class = "CircularIcon CircularIcon--survey">
                        <span class = "Icon Icon--survey"></span>
                    </a>
                    <h2>Undersøkelse</h2>
                    <p>Besøk oss for en konsultasjon hvor vi undersøker din tannhelse.</p>
                    <a href = "{{ URL::route( 'survey' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'emergency' ) }}#info" class = "CircularIcon CircularIcon--emergency">
                        <span class = "Icon Icon--emergency"></span>
                    </a>
                    <h2>Akutt hjelp</h2>
                    <p>Har du akutte smerter og trenger umiddelbar hjelp hjelper vi deg.</p>
                    <a href = "{{ URL::route( 'emergency' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'whitening' ) }}#info" class = "CircularIcon CircularIcon--whitening">
                        <span class = "Icon Icon--whitening"></span>
                    </a>
                    <h2>Tannbleking</h2>
                    <p>Lyst på et hvitere smil? Vi hjelper deg å få glansen tilbake.</p>
                    <a href = "{{ URL::route( 'whitening' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'gum' ) }}#info" class = "CircularIcon CircularIcon--gum">
                        <span class = "Icon Icon--gum"></span>
                    </a>
                    <h2>Tannkjøtt</h2>
                    <p>Vi behandler periodonti og andre tannkjøttskader.</p>
                    <a href = "{{ URL::route( 'gum' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'implant' ) }}#info" class = "CircularIcon CircularIcon--implant">
                        <span class = "Icon Icon--implant"></span>
                    </a>
                    <h2>Tannimplantat</h2>
                    <p>Har du mistet en tann kan vi hjelpe deg med å erstatte den.</p>
                    <a href = "{{ URL::route( 'implant' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'rootCanal' ) }}#info" class = "CircularIcon CircularIcon--rootCanal">
                        <span class = "Icon Icon--rootCanal"></span>
                    </a>
                    <h2>Rotfylling</h2>
                    <p>Ved infiserte nerver kan vi hjelpe til med å tette rotkanalene.</p>
                    <a href = "{{ URL::route( 'rootCanal' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'cleaning' ) }}#info" class = "CircularIcon CircularIcon--cleaning">
                        <span class = "Icon Icon--cleaning"></span>
                    </a>
                    <h2>Tannrens</h2>
                    <p>Tannrens ved bruk av nymoderne behandlingsmetoder.</p>
                    <a href = "{{ URL::route( 'cleaning' ) }}#info">Les mer</a>
                </li>
                <li class = "ServicesBrief-item">
                    <a href = "{{ URL::route( 'xRay' ) }}#info" class = "CircularIcon CircularIcon--xRay">
                        <span class = "Icon Icon--xRay"></span>
                    </a>
                    <h2>Digital Røntgen</h2>
                    <p>Trygg, effektiv og smertefri røntgenundersøkelse.</p>
                    <a href = "{{ URL::route( 'xRay' ) }}#info">Les mer</a>
                </li>
            </ul>
        </div>
    </section>

@stop