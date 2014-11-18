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

        if ( Input::get( 'email' ) ) {

            Mail::send( 'emails.scheme-sent', [ ], function ( $message ) {

                $message->to( Input::get( 'email' ) )->subject( 'Takk for din henvendelse!' );;
            } );
        }

        $departments = [ 'Nydalen', 'Romsås' ];

        if ( Input::get( 'department' ) == 1 ) {

            Mail::send( 'emails.new-scheme', [
                'name'       => Input::get( 'name' ),
                'department' => $departments[ Input::get( 'department' ) - 1 ],
                'phone'      => Input::get( 'phone' ),
                'email'      => Input::get( 'email' ),
                'date'       => Input::get( 'date' ),
                'time'       => Input::get( 'time' )
            ], function ( $message ) {

                $message->to( 'nydalen@smiletditt.no' )->subject( 'Ny henvendelse fra ' . Input::get( 'name' ) );
            } );

        } else {

            Mail::send( 'emails.new-scheme', [
                'name'       => Input::get( 'name' ),
                'department' => $departments[ Input::get( 'department' ) - 1 ],
                'phone'      => Input::get( 'phone' ),
                'email'      => Input::get( 'email' ),
                'date'       => Input::get( 'date' ),
                'time'       => Input::get( 'time' )
            ], function ( $message ) {

                $message->to( 'romsas@smiletditt.no' )->subject( 'Ny henvendelse fra ' . Input::get( 'name' ) );
            } );

        }

        Mail::send( 'emails.new-scheme', [
            'name'       => Input::get( 'name' ),
            'department' => $departments[ Input::get( 'department' ) - 1 ],
            'phone'      => Input::get( 'phone' ),
            'email'      => Input::get( 'email' ),
            'date'       => Input::get( 'date' ),
            'time'       => Input::get( 'time' )
        ], function ( $message ) {

            $message->to( 'mangopixel.as@gmail.com' )->subject( 'Ny henvendelse fra ' . Input::get( 'name' ) );
        } );

        return Redirect::to( '/kontakt?sent#info' );
    }
}