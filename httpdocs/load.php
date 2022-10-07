<?php 

session_start();
define("V_START",microtime('TRUE'));

/**
 * This is the first 
 * file loaded in Vesper.
 */

define("ROOTPATH",  dirname(__DIR__,1)); // one back

/**
 * Vesper uses Composer for version.
 * That is why we use their autoloader.
 */


require_once ROOTPATH."/vendor/autoload.php";
require_once ROOTPATH."/vendor/vesperphp/elemental/service/functions/debug.php";
foreach (glob(ROOTPATH."/init/*.php") as $filename){ require_once $filename; }





