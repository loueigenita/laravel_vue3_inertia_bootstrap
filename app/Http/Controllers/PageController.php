<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function about(){
        return inertia('About');
    }
    public function pioneer(){
        return inertia('Pioneer');
    }
    public function services(){
        return inertia('Services');
    }
    public function contact(){
        return inertia('Contact');
    }
}
