<?php

//use App\Models\UserModel;
use Elemental\Config;

/**
 * This is the place to set up global
 * variables that you can use on all
 * classes and on the templates.
 */

$global = [

    'title' => Config::get('site/title'),
    'url' => Config::get('site/url'),
    'uri' => Config::get('site/url'),

    'user' => [
        'id' => 1,
        'name' => 1,
        'slug' => 1,
        'avatar' => 1,
    ]

];

define("V_GLOBAL", $global);
