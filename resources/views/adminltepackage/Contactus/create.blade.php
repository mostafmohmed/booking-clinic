@extends('adminlte::page')
@section('content')
<form  action="{{route('storyu2')}}" method="POST">
    
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">massage</label>
      <input type="text" name="massage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">phone</label>
        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>


     
   
    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection