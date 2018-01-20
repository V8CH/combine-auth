<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

use Illuminate\Support\Facades\Route;

Route::middleware('web')
    ->namespace('V8CH\Combine\Auth\Http\Controllers')
    ->group(function () {

        // Authentication Routes...
//        // Registration Routes...
//        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//        $this->post('register', 'Auth\RegisterController@register');
//
//        // Password Reset Routes...
//        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//        $this->post('password/reset', 'Auth\ResetPasswordController@reset');

        // --------------------------------
        // Auth routes
        // --------------------------------

        Route::get('forgot', function () {
            return view('combine::granary-auth');
        });

        Route::post('logout', 'LoginController@logout');
        Route::post('login', 'LoginController@login');

        // --------------------------------
        // Default Granary routes
        // --------------------------------

        Route::get('login', function () {
            return view('combine::granary-auth');
        });

        Route::get('signup', function () {
            return view('combine::granary-auth');
        });
    });
