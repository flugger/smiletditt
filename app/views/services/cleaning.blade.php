@extends( 'layouts.default' )

@section( 'pageTitle', 'Undersøkelse - Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class="BreadCrumb">
                <a href = "{{ URL::route( 'home' ) }}" class = "CircularIcon CircularIcon--cleaning Icon--inline">
                    <span class = "Icon Icon--cleaning Icon--back"></span>
                </a>
                <h2 class = "Icon--header">Tannrens</h2>
            </div>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <div class = "ServicesPage">
                <div class="ServicesPage-text">
                    <p>Det trenger ikke å være ubehagelig å gjennomgå en tannrens med nymoderne metoder. Våre tannleger benytter metoden Air-Flow, et system som gir en lett sandblåsing av tennene med en spray av luft, vann og natriumkarbonat uten at dette skader tennene. Tennene blir hvitere og renere på en behagelig og effektiv måte. Ved bleking av tenner kan dette også gjøres om ønskelig.</p>
                </div>
                <div class="ServicesPage-prices">
                    <div class = "PriceRow">
                        <strong class = "Header">Air-flow Tannrens</strong>
                        <h3 class = "Price">400,-</h3>
                    </div>
                    <div class = "PriceRow">
                        <strong class = "Header">Tannsteinrens</strong>
                        <h3 class = "Price">400,-</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop