@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--xRay Icon--inline">
                    <span class = "Icon Icon--xRay Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Digital Røntgen</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">

            <h4>Prosess</h4>
            <p>
                Dagens moderne tannbehandling innebærer at vi legger vekt på å forebygge skader før de oppstår fremfor å vente til skaden har oppstått.
                Ny teknologi har gitt oss helt andre muligheter til å oppnå nettopp dette.  Nye materialer og teknikker gjør oss i stand til å informere
                pasientene på en helt annen måte enn tidligere. I tillegg kan vi kommunisere med andre spesialister i vårt nettverk når det er faglige ting
                vedrørende behandlingen vi ønsker å diskutere nærmere. Dette for å kunne gi deg så bra kvalitet på behandlingen som mulig.
            </p>

            <h4>Behandling</h4>
            <p>
                Røntgen er et viktig hjelpemiddel i moderne tannbehandling. Med en røntgenundersøkelse får vi muligheten til å se ting som kan være umulig å oppdage ellers.
                Dagens moderne tannbehandling legger vekt på forebyggende tiltak. Da bør vi oppdage eventuell sykdom på et så tidlig stadium som mulig.
                Om vi i dag hadde fulgt gammel praksis og ventet til tennene begynte å verke og gjøre vondt, ville mulighetene for tilheling vanligvis vært mye dårligere
                eller umulig. Ved en røntgenundersøkelse kan vi lete etter karies, lokalisere infeksjoner, kontrollere tilheling og oppdage skader på kjeveben og tenner.
            </p>

        </div>
    </section>

@stop