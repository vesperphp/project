<?php

use Elemental\Route;
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
Route::get('test/{paginate}', HomeController::class, 'test'); // activate pagination


/**
 * Session routing for a Controller with
 * all the methods to modify your data.
 */

$userPanelRights = [
//  [Shield::class, 'hasSession'],
//  [Shield::class, 'activeAccount']
];

//Route::get('login/', SessionController::class, 'login',[
//    [Shield::class, 'noSession'],
//]);
//Route::post('login/', SessionController::class, 'authenticate',[
//   [Shield::class, 'noSession'],
//]);
//Route::get('logout/', SessionController::class, 'logout');

/**
 * Standard Error routing that
 * returns a clean error page.
 */

//Route::get('error/{code}', Error::class, 'view');

/**
 * Package: Interact
 * Interact is the Admin 
 * panel for Vesper.
 */

$adminPanelRights = [
//    [Shield::class, 'hasRole', [1]],
];
 
 /**
  * Dashboard:
  */
  
//Route::get('admin/', Dashboard::class, 'index', $adminPanelRights);

/**
 * User management:
 */

//Route::get('admin/users/', Users::class, 'index', $adminPanelRights);
//Route::get('admin/user/new/{id}', Users::class, 'create', $adminPanelRights);
//Route::post('admin/user/new/{id}', Users::class, 'insert', $adminPanelRights);
//Route::get('admin/user/edit/{id}', Users::class, 'edit', $adminPanelRights);
//Route::post('admin/user/edit/{id}', Users::class, 'update', $adminPanelRights);
//Route::get('admin/user/delete/{id}', Users::class, 'delete', $adminPanelRights);
//Route::post('admin/user/delete/{id}', Users::class, 'destroy', $adminPanelRights);