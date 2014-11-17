@extends( 'layouts.default' )

@section( 'pageTitle', 'Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">
            <div class = "ContactForm">

                @if ( Session::get( 'errors' ) )
                    <ul>
                        @foreach ( Session::get( 'errors' )->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                {{ Form::open( [ 'route' => 'sendScheme' ] ) }}

                    <div class = "ContactForm-double pushIt">

                        <div class = "ContactForm-doubleItem">
                            <label>{{ Form::radio( 'department', '1', true ) }} Nydalen</label>
                        </div>
                        <div class = "ContactForm-doubleItem">
                            <label>{{ Form::radio( 'department', '2', false ) }} Romsås</label>
                        </div>

                    </div>

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