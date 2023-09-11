<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class Doctorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get doctor for major title =prf.
        //inner join
//         $doctor=Doctor::select('doctors.*','majors.title')->
// join('majors','doctors.major_id','=','majors.id')
//        ->where('majors.title','Prof.')
//        ->get();



//  ولاكنها مبتعرضش         ا join نفس


//    بتاخد اسم العلاقة مش اسم الجدول   majors

$doctor=Doctor::whereHas('major',function($q){
    $q->where('title','Prof.')->orwhere('title','Ms.');
})->get();
    //    dd( $doctor);

    $major=Major::whereHas('doctor',function($q){
        $q->whereHas('rates',function($qu){
            $qu->select('doctor_id')->groupBy('doctor_id')->havingRaw('AVG(rate)>3');
        });
    })->get();
dd($major);

    return view('adminltepackage.doctor.index',compact('doctor'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $major=Major::get();
     return view('adminltepackage.doctor.create',compact('major'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $path = $request->file('image')->store('public');
        $path = str_replace('public', 'storage', $path);
        $data['image'] = $path;

        var_dump($data);
        Doctor::create( $data);
             return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $doctor=Doctor::find($id);


        return view('adminltepackage.doctor.show',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor=Doctor::find($id);

             return view('adminltepackage.doctor.edite',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Doctor::where('id',$id)->update(['name'=>$request->name,'city'=>$request->city]);
              return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
