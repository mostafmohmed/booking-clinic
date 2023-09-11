@extends('adminlte::page')
@section('content')

  {{-- <a href=" {{route('storyu')}}">create</a> --}}
  <form  action="{{route('Contactusup',$Contactus->id)}}" method="POST">
    @method('put')
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">name</label>
      <input type="text" name="name" class="form-control" value="{{$Contactus->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">massage</label>
        <input type="text" name="massage" class="form-control" value="{{$Contactus->massage}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">email</label>
        <input type="text" name="email" class="form-control" value="{{$Contactus->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
   
    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection