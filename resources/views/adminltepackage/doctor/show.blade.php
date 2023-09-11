@extends('adminlte::page')
@section('content')
<table class="table">
  {{--  <a href=" {{route('doctor.create')}}">create</a>  --}}
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
        <td>{{$doctor->city}}</td>
         <td>{{$doctor->major->title}}</td>
        <td>{{$doctor->name}}</td>
        {{-- <td>{{$item->status}}</td> --}}
    {{--  <td> <a href=" {{route('doctor.edit',$item->id)}}">edite</a> </td>  --}}
        {{-- <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td> --}}
        <a></a>
      </tr>



    </tbody>
  </table>
@endsection
