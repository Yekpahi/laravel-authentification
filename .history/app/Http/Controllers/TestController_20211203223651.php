<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['foo']);
    }
    
    public function foo() {
        if (! Gate::allows('admin')) {
            abort(403);
        }
        return  view('test.foo');
    }
    public function bar() 
    {
        $user = ['email' => 'user@test.com', 'name' =>'Prince Bai'];
        Mail::to($user[u])->send(new MailableClass);
        return  view('test.bar');
    }
}
