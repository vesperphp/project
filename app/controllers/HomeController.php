<?php

namespace App\Controllers;

use Elemental\Model;
use Frontier\Frontier;


class HomeController extends Model{
  
  /**
   * This is the homepage.
   */

  public function index(){

    /**
     * Welcome to the homepage. 
     */

    Frontier::view('index.html');
    
  }

  /**
   * Classes can also hook
   * assets to the Frontier
   * templates. Check out
   * Init/hooks.php
   */

  public function assets(){

    //echo "<!-- Asset placeholder from HomeController::assets() -->";
    
  }

  public function test(){
    
    //$posts = Sequel::select('posts')->paginate($this->path)->sort('id', 'DESC')->join('users')->do();

    //dump($posts);
    //$paginate = Paginate::build($posts);
    //dump($paginate);

    //Frontier::view('paginate.html',['posts' => $posts]);

  //dump($t);
    /*
    $array = [];
    dump(
      Sendry::template('confirmation.html',$array) //or
      Sendry::html('allthehtmlinhere') // or
      Sendry::text()
      ->subject('Hi, this is an confirmation mail.')
      ->to('info@email.com')
      ->header('bcc', 'another@email.com')
      ->header('bcc', 'bob@email.com')
      ->test() // or
      ->send();
    );*/


  }

  
}

/**
 * Paginate affects:
 * Routes, 
 */