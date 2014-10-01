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
}