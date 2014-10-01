<?php

class ServicesController extends BaseController {

    public function survey() {
        return View::make( 'services.survey' );
    }

    public function emergency() {
        return View::make( 'services.emergency' );
    }

    public function whitening() {
        return View::make( 'services.whitening' );
    }

    public function gum() {
        return View::make( 'services.gum' );
    }

    public function implant() {
        return View::make( 'services.implant' );
    }

    public function rootCanal() {
        return View::make( 'services.root-canal' );
    }

    public function cleaning() {
        return View::make( 'services.cleaning' );
    }

    public function xRay() {
        return View::make( 'services.x-ray' );
    }

}