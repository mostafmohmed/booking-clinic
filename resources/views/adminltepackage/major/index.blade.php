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
      @foreach ($major as $item)


      <tr>
        <th scope="row">1</th>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        {{-- <td>{{$item->status}}</td> --}}
        <td> <a href=" {{route('edite',$item->id)}}">edite</a> </td>
        {{--  <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td>  --}}
         <td> <a href=" {{route('major.show',$item->id)}}">show</a> </td>
        <a></a>
      </tr>
      @endforeach
      {{$major->links('pigration')}}
      {{--  <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>  --}}
    </tbody>
  </table>
@endsection
