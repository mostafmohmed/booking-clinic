@extends('adminlte::page')
@section('content')
<form  action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">

@csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label w-20">name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label w-20">city</label>
        <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

      </div>


      <div class="mb-3">

        <select name="title" id="cars">
            @foreach ($major as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach


          </select>
      </div>
      <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">
  </div>

    <button type="submit" class="btn btn-primary">save</button>
  </form>
@endsection
