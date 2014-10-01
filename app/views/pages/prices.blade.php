@extends( 'layouts.default' )

@section( 'pageTitle', 'Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <ul class = "Offers">
                <li class = "Offers-item">
                    <a href = "{{ URL::route( 'survey' ) }}" class = "CircularIcon">
                        <span class = "Icon Icon--deal"></span>
                    </a>
                    <h2>Høstkampanje</h2>
                    <h3>300,-</h3>
                    <p>Undersøkelse med to røntgenbilder og lett rens.</p>
                </li>
                <li class = "Offers-item">
                    <a href = "{{ URL::route( 'emergency' ) }}" class = "CircularIcon">
                        <span class = "Icon Icon--student"></span>
                    </a>
                    <h2>Studentrabatt</h2>
                    <h3>20% rabatt</h3>
                    <p>På all behandling ved fremvisning av gyldig studentbevis.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class = "MainSection">
        <div class = "PageContainer">
            <ul class = "PriceList">
                <li class="PriceList-item">
                    <h4>Undersøkelse</h4>
                    <h3>475,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Røntgenbilde</h4>
                    <h3>45,- pr. stk</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Bedøvelse</h4>
                    <h3>105,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Tannbleking</h4>
                    <h3>Fra 1999,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Protetikk</h4>
                    <h3>Fra 3700,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Kirurgi</h4>
                    <h3>Fra 400,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Rotfylling</h4>
                    <h3>Fra 2500,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Toppfylling</h4>
                    <h3>Fra 500,-</h3>
                </li>
                <li class="PriceList-item">
                    <h4>Tannfarget fylling</h4>
                    <h3>Fra 400,-</h3>
                </li>
            </ul>
        </div>
    </section>
@stop