<?php

namespace App\Assets;

use Elemental\Config;


class Assets{
  

  /**
   * Classes can also hook
   * assets to the Frontier
   * templates. Check out
   * Init/hooks.php
   */

  public function head(){

    echo "<!-- This website is crafted with Vesper-PHP. -->"."\n";
    echo '<link rel="stylesheet" href="'.Config::get('site/uri').'/css/vesper-bulma.css">'."\n";
    echo '<link rel="stylesheet" href="'.Config::get('site/uri').'/css/vesper-css.css">'."\n";
    //echo '<link rel="stylesheet" href="'.Config::get('site/uri').'/css/app.css">'."\n";
    
  }

  public function body(){

    //echo "<!-- asset placeholder from assets / body -->";
    
  }

  public function foot(){

    echo '<script src="'.Config::get('site/uri').'/js/vesper-bundle.js"></script>';
    
  }

  
}
