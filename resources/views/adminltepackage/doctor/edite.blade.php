@extends('adminlte::page')
@section('content')

  {{-- <a href=" {{route('storyu')}}">create</a> --}}
  <form  action="{{route('doctor.update',$doctor->id)}}" method="POST">
    @method('put')
@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">title</label>
      <input type="text" name="name" class="form-control" value="{{$doctor->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">title</label>
        <input type="text" name="city" class="form-control" value="{{$doctor->city}}" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>

    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection
