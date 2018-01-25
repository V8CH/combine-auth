<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->namespace('V8CH\LaravelAuthApi\Http\Controllers')
    ->group(function () {

        // Authentication Routes...
//        // Registration Routes...
//
//        // Password Reset Routes...
//        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//        $this->post('password/reset', 'Auth\ResetPasswordController@reset');

        // --------------------------------
        // Auth routes
        // --------------------------------

        Route::get('login', function () {
            return view('combine::laravel-auth-spa');
        });
        Route::post('login', 'LoginController@login');

        Route::post('logout', 'LoginController@logout');

        Route::get('register', function () {
            return view('combine::laravel-auth-spa');
        });
        Route::post('register', 'RegisterController@register');

    });
