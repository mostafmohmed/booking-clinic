@extends('adminlte::page')
@section('content')
<form name="title" action="{{route('major.updat',$major->id)}}" method="POST">
    @method('put')
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">title</label>
      <input type="text" name="title" class="form-control" value="{{$major->title}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
   
    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection