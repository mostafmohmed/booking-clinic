<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Input\Input;

class MajorController extends Controller
{
function index (){
$major=Major::paginate(5);
return view('admin.pages.home.index',compact('major'));
}
public function show(string $id)
{
    //
    $major=Major::find($id);


    return view('adminltepackage.major.show',compact('major'));
}

function delet($id){

$major=Major::find($id);
$major->delete();
return 'vvvvvvvvvvvvvvvv';
}
function edite($id){

    $major=Major::find($id);


    return view('admin.slider.edite',compact('major'));
    }
    function post($id){

        $major=Major::find($id);

        $major->title=$_POST['title'];
        $major->save();

        return redirect('/');

    }
    function create(){
;
       return view('admin.slider.sliderCreate');
    }
    function create2(Request $re){
  Major::create(['title'=>$re->title]);
// Major::create(Input::except('_token'));
// $sucsess='the scseed massage';
$major=Major::get();
return view('admin.pages.home.index',compact('major'));
    }
    //adminltepakages
    function indexP (){
        $major=Major::paginate(5);
        return view('adminltepackage.major.index',compact('major'));
        }
        function indexe($id){
            $major=Major::find($id);

         return view('adminltepackage.major.edit',compact('major')) ;
        }
        function indexu($id, Request $re){

// $major= Major::find($id);
#1
// $major->title=$re->title;
// $major->save();
#2
// $major->update(['title'=>$re->title]);
Major::where('id',$id)->update(['title'=>$re->title]);
return redirect()->route('major.index');
        }
        function createu(){
            return view('adminltepackage.major.create');

        }
        function createu2(Request $re){
            Major::create(['title'=>$re->title]);
            return redirect()->route('major.index');
        }

}
