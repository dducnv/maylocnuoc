<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function ad_index(){
        return view('admin.ad_home');
    }
    
}
