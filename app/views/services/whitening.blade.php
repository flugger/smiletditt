@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--whitening Icon--inline">
                    <span class = "Icon Icon--whitening Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Tannbleking</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">

            <h4>Prosess</h4>
            <p>
                Det finnes ulike måter og bleke tennene på. Undersøkelser viser at bleking ikke er skadelig dersom det gjøres på riktig måte.
                La alltid tannlegen bedømme situasjonen først! Overflatemisfarginger forårsaket av mat, drikke, sigaretter osv. kan tannlege eller tannpleier
                fjerne med pussing. Dersom misfargingen derimot ligger dypere kan bleking være løsningen. Det blekemiddelet som tannlegene bruker,
                trenger inn via sprekkene i emaljen, til dentinet som finnes under og bleker det. Nesten alle tenner kan blekes. Blekingen utføres av
                pasienten hjemme. Det er viktig at tannlegen først undersøker og evt behandler tenner og tannkjøtt grundig, slik at alt er klargjort til bleking.
            </p>

            <h4>Kriterier</h4>
            <p>
                For å kunne bleke tennene må følgende kriterier være oppfylt:

                <ul>
                    <li>Dersom du har fyllinger må de være av god kvalitet</li>
                    <li>Dersom du har hull (karies) i tennene dine, må dette behandles først</li>
                    <li>Overflatemisfarginger bør være fjernet</li>
                    <li>Tannkjøttet ditt må være friskt og du bør ikke ha andre sykdommer i munnen</li>
                    <li>Du bør være over 18 år</li>
                </ul>
            </p>
        </div>
    </section>

@stop