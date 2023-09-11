<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class contact extends Controller
{
    function index(){
        $Contactus=Contactus::get();
        return view('adminltepackage.Contactus.index',compact('Contactus'));
       }
       function edite($id){
        $Contactus=Contactus::find($id);
   
        return view('adminltepackage.Contactus.edite',compact('Contactus'));
       }
       function update($id,Request $re){
Contactus::where('id',$id)->update(['email'=>$re->email,'name'=>$re->name,'massage'=>$re->massage,]);
return redirect()->route('Contact.index');
       }
       function createdocu(){
        return view('adminltepackage.Contactus.create');

       }

       function story(Request $re){
        Contactus::create(['name'=>$re->name,'email'=>$re->email,'email'=>$re->email,'phone'=>$re->phone,'subject'=>'ffffff','massage'=>$re->massage]);
        return redirect()->route('Contact.index');
       }

       }

