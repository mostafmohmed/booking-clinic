<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class bookingcontroller extends Controller
{
    //booking
    function index(){
        $booking=Booking::get();
        return view('adminltepackage.booking.index',compact('booking'));
       }
       function edite($id){
        $booking=Booking::find($id);
   
        return view('adminltepackage.booking.edite',compact('booking'));
       }
       function update($id,Request $re){
        Booking::where('id',$id)->update(['email'=>$re->email,'name'=>$re->name,'phone'=>$re->phone]);
        return redirect()->route('booking.index');
               }
               function delet($id){
    
                $Booking=Booking::find($id);
                $Booking->delete();
                return redirect()->route('booking.index');
                }

}
