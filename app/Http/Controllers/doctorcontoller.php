<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

// class doctorcontoller extends Controller
// {
//    function index(){
//    //  $doctor=Doctor::get();
//    //  return view('adminltepackage.doctor.index',compact('doctor'));
//    }
   
//    function edite($id){
//     $doctor=Doctor::find($id);
   
//     return view('adminltepackage.doctor.edite',compact('doctor'));
//    }
//    function update($id, Request $re){
//     Doctor::where('id',$id)->update(['name'=>$re->name,'city'=>$re->city]);
//      return redirect()->route('doctor.index');
//    }

//  function createdocu  (){
//     $major=Major::get();
//     return view('adminltepackage.doctor.create',compact('major'));
//    }
//    function story(Request $re){
//     Doctor::create(['name'=>$re->name,'city'=>$re->city,'major_id'=>$re->title]);
//     return redirect()->route('doctor.index');
//    }
   
// }
