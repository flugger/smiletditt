<?php

class PagesController extends BaseController {

    public function index() {

        return View::make( 'pages.home' );
    }

    public function prices() {

        return View::make( 'pages.prices' );
    }

    public function about() {

        return View::make( 'pages.about' );
    }

    public function contact() {

        return View::make( 'pages.contact' );
    }

    public function sendScheme() {

        $validator = Validator::make( Input::all(), [
            'name'  => 'required',
            'phone' => 'required'
        ] );

        if ( $validator->fails() ) {
            return Redirect::route( 'contact' )->withInput()->withErrors( $validator );
        }

        Mail::send( 'emails.welcome', [ 'key' => 'value' ], function ( $message ) {

            $message->to( 'foo@example.com', 'John Smith' )->subject( 'Welcome!' );
        } );
    }
}