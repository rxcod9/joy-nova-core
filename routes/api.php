<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Nova API Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with NovaCore.
|
*/

Route::group(['as' => 'joy-nova-core.'], function () {
    // event(new Routing()); @deprecated

    $namespacePrefix = '\\' . config('joy-nova-core.controllers.namespace') . '\\';

    // event(new RoutingAfter()); @deprecated
});
