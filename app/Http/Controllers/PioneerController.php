<?php

namespace App\Http\Controllers;
use App\Models\Pioneer;

use Illuminate\Http\Request;

class PioneerController extends Controller
{
    public function index(){
        $pioneers = Pioneer::get();

       return inertia('Pioneer',[
        'pioneers' => $pioneers
       ]);
    }
}
