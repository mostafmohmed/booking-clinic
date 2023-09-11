@extends('adminlte::page')
@section('content')

  {{-- <a href=" {{route('storyu')}}">create</a> --}}
  
  <form  action=" {{route('booking.update',$booking->id)}}" method="POST">
    @method('put')
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">name</label>
      <input type="text" name="name" class="form-control" value="{{$booking->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">phone</label>
        <input type="text" name="phone" class="form-control" value="{{$booking->phone}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">email</label>
        <input type="text" name="email" class="form-control" value="{{$booking->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
   
    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection