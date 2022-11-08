<?php

namespace App;

use Provider\Provider;
use App\Session;

/**
 * This provider model is a top-level
 * model for every entity within this
 * App. Creating, deleting etc for 
 * every object should be roughly
 * the same. So this is reusable.
 */

class User extends Provider{

    public static function new(){}

    public static function edit(){}

    public static function delete(){}

    public static function fetch(){

        return Session::details('hash_user');

    }

    public static function id(){

        return User::fetch();

    }


    public static function username(){

        return User::fetch();

    }

    public static function startSession(){

        /**
         * Add stuff to database.
         */

        Session::start('hash_user', '12345');

    }

    public static function endSession(){

        /**
         * Remove stuff from database.
         */

        Session::end();

    }


}