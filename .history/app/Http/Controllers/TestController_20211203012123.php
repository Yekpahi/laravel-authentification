<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['foo']);
    }
    
    public function foo() {
        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }
        return  view('test.foo');
    }
    public function bar() {
        return  view('test.bar');
    }
}
