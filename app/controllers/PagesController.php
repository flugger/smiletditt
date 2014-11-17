<?php

use Illuminate\Support\Facades\Mail;

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
            'department' => 'required',
            'name'       => 'required',
            'phone'      => 'required'
        ] );

        if ( $validator->fails() ) {
            return Redirect::route( 'contact' )->withInput()->withErrors( $validator );
        }

        Mail::send( 'emails.scheme-sent', [ 'Laravel Test' ], function ( $message ) {
            $message->to( 'flugged@gmail.com' );
        } );
    }
}