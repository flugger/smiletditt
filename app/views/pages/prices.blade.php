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
            <div class = "Row">
                <div class = "Row-item">
                    <h2>Undersøkelse</h2>
                    <div class = "PriceRow">
                        <strong class = "Header">Konsultasjon</strong>
                        <h3 class = "Price">400,-</h3>
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
                <div class = "Row-item">
                    <h2>Kosmetisk Tannpleie</h2>
                    <div class = "PriceRow">
                        <strong class = "Header">Tannbleking</strong>
                        <h3 class = "Price">1000,- <span>per kjeve</span></h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Tanntrekking / Kirurgi</strong>
                        <h3 class = "Price">800,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Kirurgisk ekstraksjon</strong>
                        <h3 class = "Price">2200,-</h3>
                    </div>
                </div>
                <div class = "Row-item">
                    <h2>Fyllingsterapi</h2>
                    <div class = "PriceRow">
                        <strong class = "Header">Fylling, 1 flate</strong>
                        <h3 class = "Price">450,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Fylling, 2 flater</strong>
                        <h3 class = "Price">800,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Fylling, 3 flater</strong>
                        <h3 class = "Price">900,-</h3>
                    </div>
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
                <div class = "Row-item">
                    <h2>Periodontal Behandling</h2>
                    <div class = "PriceRow">
                        <strong class = "Header">Air-flow Tannrens</strong>
                        <h3 class = "Price">400,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Tannsteinrens</strong>
                        <h3 class = "Price">400,-</h3>
                    </div>
                </div>
                <div class = "Row-item">
                    <h2>Protetikk</h2>
                    <div class = "PriceRow">
                        <strong class = "Header">Porselensinnlegg / Gullinnlegg</strong>
                        <h3 class = "Price">3400,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">MK-krone / Bropilar</strong>
                        <h3 class = "Price">3500,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">MK-krone / Bropilar</strong>
                        <h3 class = "Price">3500,-</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop