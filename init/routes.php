<?php

use Route\Route;
use Elemental\Vault;
use App\Controllers\HomeController;



/**
 * In this file you can set up Paths
 * within Vesper to connect pages to 
 * the right methods within a
 * controller.
 */

Route::get('/', HomeController::class, 'index');
Route::get('hooks/', HomeController::class, 'hook');
Route::get('test/', HomeController::class, 'test');


/**
 * Session routing for a Controller with
 * all the methods to modify your data.
 */

$userPanelRights = [
//  [Vault::class, 'hasSession'],
//  [Vault::class, 'activeAccount']
];

//Route::get('login/', SessionController::class, 'login',[
//    [Vault::class, 'noSession'],
//]);
//Route::post('login/', SessionController::class, 'authenticate',[
//   [Vault::class, 'noSession'],
//]);
//Route::get('logout/', SessionController::class, 'logout');
