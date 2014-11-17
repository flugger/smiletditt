@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--rootCanal Icon--inline">
                    <span class = "Icon Icon--rootCanal Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Rotfylling</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <div class = "ServicesPage">
                <div class="ServicesPage-text">
                    <h4>Prosess</h4>
                    <p>
                        Et hull i en tann har kommet seg inn til nerven og infisert den. En annen grunn kan være at en tannlege har boret for langt ved et uhell.
                        Nervene blir derfor døde og brune på farge. Bakterien kommer seg via rotkanalene ut mot benet rundt tannen. Diagnosen er periapikal ostitt.
                        Verket som dannes rundt rotspissen, trenger ikke å gjøre vondt. Derfor kan en rotfylling utføres uten bedøvelse.
                        Betennelsen som kan forekomme, kan spre seg slik at det gjør vondt langs hele kjevebenet på en side.
                    </p>

                    <h4>Behandling</h4>
                    <p>
                        Behandlingen innebærer at tannlegen fjerner den døde pulpaen, spyler rent, legger inn et bakteriedrepende middel i rotkanalene,
                        tetter rotkanalene og bygger igjen tannkronen. Å få rotkanalene rene krever vanligvis flere besøk. Om smertene kommer tilbake etter behandlingen
                        med bakteriedrepende middel, fjernes fyllingen og rotkanalene gjøres rene på nytt og hullet fylles på samme måte som tidligere.
                    </p>

                    <h4>Medisinering</h4>
                    <p>
                       Etter behandlingen kan det gis sterke smertestillende midler og penicillin, eller andre antibiotika, for å hemme betennelsen.
                    </p>
                </div>
                <div class="ServicesPage-prices">
                    <div class = "PriceRow">
                        <strong class = "Header">Rotfylling, 1 kanal</strong>
                        <h3 class = "Price">2500,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Rotfylling, 2 kanaler</strong>
                        <h3 class = "Price">3000,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Rotfylling, 3 - 4 kanaler</strong>
                        <h3 class = "Price">3500,-</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

@stop