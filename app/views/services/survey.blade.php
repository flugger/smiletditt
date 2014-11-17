@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--survey Icon--inline">
                    <span class = "Icon Icon--survey Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Undersøkelse</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <div class = "ServicesPage">
                <div class="ServicesPage-text">
                    <p>Ved førstegangsundersøkelse hos oss vil vi gå igjennom et helseskjema med deg. Her opplyser du oss om eventuelle sykdommer og medikamenter du bruker. Det vil gi deg en bedre og tryggere behandling, slik at vi kan tilrettelegge rundt nåværende helse. Vi vil undersøke tennene dine og se etter hull og andre mulige misdannelser. Det kan være alt fra tidligere behandlinger til tannkjøtt og generell munnhygiene.</p>
                    <p>En undersøkelse er ikke fullstendig uten røntgenbilder. Vi bruker digital teknologi, hvor vi får røntgenbilder tilsendt per maskin. Da får du en tryggere behandling og vi tar samtidig bedre vare på miljøet, det går også noe raskere. Vi vet at mange av våre pasienter setter pris på god kommunikasjon. Derfor legger vi stor vekt på å informere deg om din tannhelsesituasjon, og hva du må gjøre videre for å finne glansen i ditt smil. Velkommen skal du være!</p>
                </div>
                <div class="ServicesPage-prices">
                    <div class = "PriceRow">
                        <strong class = "Header">Konsultasjon</strong>
                        <h3 class = "Price">300,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Bedøvelse</strong>
                        <h3 class = "Price">100,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Røntgenbilde</strong>
                        <h3 class = "Price">50,- <span>/ stk</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop