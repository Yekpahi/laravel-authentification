<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['foo']);
    }
    
    public function foo() {
        
        return  view('test.foo');
    }
    public function bar() {
        return  view('test.bar');
    }
}
