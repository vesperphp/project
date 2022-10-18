<?php 

session_start();
define("V_START",microtime('TRUE'));

/**
 * This is the first 
 * file loaded in Vesper.
 */

define("ROOTPATH",  dirname(__DIR__,1)); // one back

/**
 * Vesper uses Composer for version management.
 * That is why we use their autoloader.
 */

require_once ROOTPATH."/vendor/autoload.php";

/**
 * Load the routes and hooks
 * from the vendor packages.
 */

foreach (glob(ROOTPATH."/vendor/vesperphp/*/init/load.php") as $filename){ require_once $filename; }

/**
 * Load all the init files
 * in the init folder.
 */

foreach (glob(ROOTPATH."/init/*.php") as $filename){ require_once $filename; }
