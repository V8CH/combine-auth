<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

use Illuminate\Support\Facades\Route;

/** @noinspection PhpMethodParametersCountMismatchInspection */
Route::prefix('api/v1')
    ->middleware('api')
    ->namespace('V8CH\Combine\Auth\Http\Controllers')
    ->group(function () {


        /** @noinspection PhpMethodParametersCountMismatchInspection */
        Route::middleware('auth:api')
            ->group(function () {

                // --------------------------------
                // Session routes
                // --------------------------------
                Route::apiResource('session', 'SessionController', ['only' => ['show', 'update']]);
            });
    });
