@extends( 'layouts.default' )

@section( 'pageTitle', 'Smilet Ditt Tannklinikk' )

@section('content')

    <section class = "MainSection--shade">
        <div class = "PageContainer">

            @if ( isset( $_GET[ 'sent' ] ) )
                <div style = "text-align: center">
                    <h2>Takk for din henveldese!</h2>
                    <span>Vi vil kontakte deg så snart som mulig.</span>
                </div>
            @else

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
                                <h3><label>{{ Form::radio( 'department', '1', isset( $_GET[ 'nydalen' ] ) ) }} Nydalen</label></h3>
                            </div>
                            <div class = "ContactForm-doubleItem">
                                <h3><label>{{ Form::radio( 'department', '2', isset( $_GET[ 'romsas' ] ) ) }} Romsås</label></h3>
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
            @endif
        </div>
    </section>

@stop