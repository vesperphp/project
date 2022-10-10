<?php

use Elemental\Api;
use Elemental\Vault;
use App\Controllers\HomeController;



/**
 * In this file you can set up Paths
 * within Vesper to connect pages to 
 * the right methods within a
 * controller for the api.
 */

Api::get('/', HomeController::class, 'apitest', []);
