<?php

Route::get( '/', [
    'as' => 'home',
    'uses' => 'PagesController@index',
]);

Route::get( 'undersokelse', [
    'as' => 'survey',
    'uses' => 'ServicesController@survey',
]);

Route::get( 'akutt-hjelp', [
    'as' => 'emergency',
    'uses' => 'ServicesController@emergency',
]);

Route::get( 'tannbleking', [
    'as' => 'whitening',
    'uses' => 'ServicesController@whitening',
]);

Route::get( 'tannkjott', [
    'as' => 'gum',
    'uses' => 'ServicesController@gum',
]);

Route::get( 'tannimplantat', [
    'as' => 'implant',
    'uses' => 'ServicesController@implant',
]);

Route::get( 'rotfylling', [
    'as' => 'rootCanal',
    'uses' => 'ServicesController@rootCanal',
]);

Route::get( 'tannrens', [
    'as' => 'cleaning',
    'uses' => 'ServicesController@cleaning',
]);

Route::get( 'digital-rontgen', [
    'as' => 'xRay',
    'uses' => 'ServicesController@xRay',
]);

Route::get( 'digital-rontgen', [
    'as' => 'xRay',
    'uses' => 'ServicesController@xRay',
]);

Route::get( 'priser', [
    'as' => 'prices',
    'uses' => 'PagesController@prices',
]);

Route::get( 'om-oss', [
    'as' => 'about',
    'uses' => 'PagesController@about',
]);

Route::get( 'kontakt', [
    'as' => 'contact',
    'uses' => 'PagesController@contact',
]);