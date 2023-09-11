<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class usercontrol extends Controller
{
 
    function index (){
        $u=   User::get();
       $i=6;
       return view('home',compact('u','i'));
       }
 
}
