@extends( 'layouts.default' )

@section( 'pageTitle', 'Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <ul class = "Avatars">
                <li class = "Avatars-item">
                    {{ HTML::image( 'images/avatar1.jpg', 'Vegard Beider' ) }}
                    <h2>Vegard Beider</h2>
                    <p>Snill og følsom type, benytter kun kule hatter. Blå hatt og grønn hatt.</p>
                    {{ link_to_route( 'survey', 'Les mer' ) }}
                </li>
                <li class = "Avatars-item">
                    {{ HTML::image( 'images/avatar2.jpg', 'Per Vers' ) }}
                    <h2>Per Vers</h2>
                    <p>Flink type med gode egenskaper og tidligere verdensmester i brødristing.</p>
                    {{ link_to_route( 'emergency', 'Les mer' ) }}
                </li>
            </ul>
        </div>
    </section>
    <section class = "MainSection">
        <div class = "PageContainer">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
        </div>
    </section>

@stop