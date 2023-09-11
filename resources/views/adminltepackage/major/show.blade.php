@extends('adminlte::page')
@section('content')
<table class="table">
  <a href=" {{route('storyu')}}">create</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>



      <tr>
        <th scope="row">1</th>
        <td>{{$major->id}}</td>

         <td>{{$major->title}}</td>
        {{-- <td>{{$item->status}}</td> --}}

        <a></a>
      </tr>


    </tbody>
  </table>
  <table class="table">
  <a href=" {{route('storyu')}}">create</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

 @foreach ($major->doctor as $doc)

      <tr>
        <th scope="row">1</th>
        {{--  <td>{{$major->id}}</td>  --}}
         <td>{{$doc->name}}</td>
         <td>{{$doc->city}}</td>
        {{--  <td>{{$major->title}}</td>  --}}
        {{-- <td>{{$item->status}}</td> --}}

        <a></a>
      </tr>
  @endforeach

    </tbody>
  </table>
@endsection
