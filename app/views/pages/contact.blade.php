@extends( 'layouts.default' )

@section( 'pageTitle', 'Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class = "ContactForm">
                {{ Form::open() }}

                    {{ Form::label( 'name', 'Fullt Navn:', [ 'class' => 'required' ] )  }}
                    {{ Form::text( 'name', null )  }}

                    {{ Form::label( 'phone', 'Telefonnummer:', [ 'class' => 'required' ] )  }}
                    {{ Form::text( 'phone', null )  }}

                    {{ Form::label( 'email', 'E-postadresse:' )  }}
                    {{ Form::text( 'email', null )  }}

                    <div class = "ContactForm-double">

                        <div class = "ContactForm-doubleItem">
                            {{ Form::label( 'date', 'Ønsket dato:' )  }}
                            {{ Form::text( 'date', null, [ 'class' => 'date' ] )  }}
                        </div>
                        <div class = "ContactForm-doubleItem">
                            {{ Form::label( 'time', 'Ønsket tidspunkt:' )  }}
                            {{ Form::text( 'time', null )  }}
                        </div>

                    </div>

                    {{ Form::button( 'Send Bestilling', [ 'type' => 'submit', 'class' => 'Button--form Button' ] ) }}

                {{ Form::close() }}
            </div>
        </div>
    </section>

@stop