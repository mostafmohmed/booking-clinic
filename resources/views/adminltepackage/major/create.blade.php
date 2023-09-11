@extends('adminlte::page')
@section('content')
<form name="title" action="{{route('storyu2')}}" method="POST">
    
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
   
    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection