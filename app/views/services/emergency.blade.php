@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--emergency Icon--inline">
                    <span class = "Icon Icon--emergency Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Akutt Hjelp</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <div class = "ServicesPage">
                <div class="ServicesPage-text">
                    <p>Å besøke tannlegen regelmessig kan bidra til å motvirke tannhelseproblemer, på tross av dette kan alle allikevel oppleve akutte smerter i tannregionen av forskjellige grunner. Har du dype hull i tennene kan bakterier komme seg inn i nervebanen i tennene og du vil føle en pulserende smerte i kjeven og oppover mot øret. Har uhellet først oppstått og du føler stort ubehag i tannregionen er vi tilgjengelig for bistand på kort varsel.</p>
                </div>
                <div class="ServicesPage-prices">
                    <div class = "PriceRow">
                        <strong class = "Header">Akutthjelp</strong>
                        <h3 class = "Price">500,-</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop