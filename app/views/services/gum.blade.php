@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--gum Icon--inline">
                    <span class = "Icon Icon--gum Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Tannkjøtt</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">

            <h4>Plager</h4>
            <p>
                Tannløsning kommer som regel av tannkjøttsykdommen periodontitt. Det er en betennelsessykdom som i første rekke
                rammer det vevet som holder tannen fast. Denne sykdommen rammer veldig mange, og er den vanligste årsaken til tanntap i Norge.
                Periodontitt er vanligvis et langsomt voksende problem. Om du ikke får behandling, kan det ta mange år før en tann eller flere tenner
                går tapt. Ofte kommer de alvorlige symptomene først i sluttfasen, i form av hevelse, verking og løse tenner.
            </p>

            <h4>Periodonti</h4>
            <p>
                En av våre tannleger med kompetanse på området utfører tannkjøttoperasjoner når vi ser at vanlig behandling hos tannpleier eller
                tannlege ikke er nok. Dersom du likevel skulle miste tenner på grunn av periodontitt, så har vår spesialist mange års erfaring med implantatkirurgi.
                Denne behandlingen yter folketrygden stønad til. Les mer under trygderegler. Vi ser dessverre at periimplantitt
            </p>

            <h4>Tannpleiertjenester</h4>
            <p>
                Vår tannpleiers fremste oppgave er å behandle og forebygge periodontitt (tannløsning), som rammer en veldig stor del av befolkningen.
                Har det først dannet seg lommer rundt tennene, som er den vanligste årsaken til tanntap, vil du trenge profesjonell hjelp for å stoppe prosessen.
                Det er erfor NAV yter stønad til denne typen behandling, et ubregrenset antall ganger per år. Pasienten  kun en moderat egenandel til oss.
                Mange opplever dessuten velvære etter rens og puss hos tannpleier. Du føler deg rett og slett ren i munnen, noe de fleste setter svært stor pris på.
            </p>

            <h4>Tegn på periodontitt/tannkjøttsykdom</h4>
            <p>
                Følgende tegn kan tyde på begynnende tannløsningssykdom (vær oppmerksom på at løsningssykdommer ikke alltid gir symptomer):

                <ul>
                    <li>Lettblødende og ømt tannkjøtt</li>
                    <li>Tennene føles løse</li>
                    <li>Tannkjøttet mellom tennene forandres</li>
                    <li>Stadig dårlig ånde</li>
                    <li>Vedvarende hovent tannkjøtt</li>
                    <li>Tannsten, dårlig munnhygiene, røyking, stress, arvelige faktorer og visse sykdommer er faktorer som fremskynder utviklingen av tannkjøttsykdom.</li>
                </ul>
            </p>

        </div>
    </section>

@stop