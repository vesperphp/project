<?php

use App\Assets\Assets;
use Frontier\Service\Hook;
use App\Controllers\HomeController;
use Interact\Service\InteractNavigation;

/**
 * This is the place where you 
 * can assign things to the hook
 * such as assets for the Frontier
 * templates. head|body|foot
 */

Hook::asset('head', 'AssetFilterHead', [Assets::class,'head']);
Hook::asset('body', 'AssetFilterBody', [Assets::class,'body']);
Hook::asset('foot', 'AssetFilterFoot', [Assets::class,'foot']);


/**
 * You can also hook assets 
 * from controllers if
 * needed.
 */

//Hook::asset('frontier/head', 'homeAsset1', [HomeController::class,'assets']);
