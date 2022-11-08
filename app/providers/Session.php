<?php

namespace App;

use Provider\Provider;

/**
 * This provider model is a top-level
 * model for every entity within this
 * App. Creating, deleting etc for 
 * every object should be roughly
 * the same. So this is reusable.
 */

class Session extends Provider{


    public static function start(string $name, string $id){

        $_SESSION[$name] = $id;

    }

    public static function end(){

        session_destroy();

    }

    public static function details(string $name){

        return $_SESSION[$name];

    }


}