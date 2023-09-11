@extends('adminlte::page')
@section('content')
<table class="table">
  <a href=" {{route('doctor.create')}}">create</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($doctor as $item)
      {{--  {{$item->major->title??'genral'}}  --}}

      <tr>
        <th scope="row">1</th>
        <td>{{$item->city}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->title }}</td>
         <td><img src="{{ $item->image }}" width="40"></td>
        {{-- <td>{{$item->status}}</td> --}}
    <td> <a href=" {{route('doctor.edit',$item->id)}}">edite</a> </td>
      <td> <a href=" {{route('doctor.show',$item->id)}}">show</a> </td>
        {{-- <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td> --}}
        <a></a>
      </tr>
      @endforeach


    </tbody>
  </table>
@endsection
