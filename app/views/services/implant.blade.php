@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--implant Icon--inline">
                    <span class = "Icon Icon--implant Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Tannimplantat</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <h4>Prosess</h4>
            <p>
                Tannimplantater er en moderne og trygg behandling for å erstatte en eller flere tenner du har mistet.
                Tannimplantater fungerer som en kunstig tannrot på hvilken deretter en tannkrone / bro / protese kan festes til.
                Tannimplantat kan sikres på både over-og underkjeven. Tannimplantat er laget av en titanlegering som er biokompatibelt med kroppens eget vev,
                og kan derfor gro inn i kjevebenet.
            </p>

            <h4>Hvordan utføres en implantatbehandling?</h4>
            <p>
                Tannimplantater er unik for hver person og det kan være flere
                forskjellige behandlingsmetoder. Ved behandling må man belage seg på at behandlingen kan ta fra 6 uker til 6 måneder og man må som regel til
                tannlegen minst 3-4 ganger før behandlingen er ferdig. Første skritt er å planlegge behandlingen i samarbeid med pasienten. Deretter settes
                selve implantatet inn. Etter normal 2-3 måneder setter man inn tannkronen, tannbroen eller protesen.
            </p>
        </div>
    </section>

@stop