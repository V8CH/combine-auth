<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\Combine\Auth\Http\Controllers;

trait HasUserContext
{

    protected function userContext()
    {
        return request()->user()->selected_context;
    }
}