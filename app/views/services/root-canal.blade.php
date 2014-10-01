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
                Man kan vente inntil fire–fem måneder før den provisoriske fyllingen byttes ut med «den nye tannen».
            </p>

            <h4>Første besøk</h4>
            <p>
                Ved første besøk forsikrer tannlegen seg om at området rundt tannen er bedøvet. Om noen av nervene lever, settes det bedøvelse.
                I den betente tannen er det ondartede bakterier som ikke må gå til de andre tennene. For å hindre dette setter tannlegen en gummiduk, kofferdam,
                over tannen og lager et hull for tannen. Med små instrumenter fjernes det som måtte være igjen av røttene, som da sannsynligvis er borte eller brune.
                Kanalene blir renset med en blanding av ferskvann, salt og en kalkløsning. Blandingen har en pH-verdi på 14 og ingen bakterier overlever møtet med den.
                Røntgenbilder tas for å kontrollere at kanalene er rene. Hullet i kronen blir fylt med en provisorisk fylling. Etter to–tre (maksimalt fem) måneder
                må pasienten tilbake for fylling.
            </p>

            <h4>Andre besøk</h4>
            <p>
                Under andre besøk bores den provisoriske fyllingen ut og byttes ut med en solid fylling.
            </p>

            <h4>Medisinering</h4>
            <p>
               Etter behandlingen kan det gis sterke smertestillende midler og penicillin, eller andre antibiotika, for å hemme betennelsen.
            </p>

        </div>
    </section>

@stop