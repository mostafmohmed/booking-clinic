@extends('admin.layout.app')


     @section('content')
     <a class="btn btn-primary" href="{{route('create')}}" role="button">create</a>
     <table class="table">
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
          <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td>
          <a></a>
        </tr>
        @endforeach
        <tr>
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
        </tr>
      </tbody>
    </table>
     @endsection