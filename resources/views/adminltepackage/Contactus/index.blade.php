@extends('adminlte::page')
@section('content')
<table class="table">
  <a href=" {{route('storycon')}}">create</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        
      @foreach ($Contactus as $item)
          
     
      <tr>
        <th scope="row">1</th>
        <td>{{$item->email}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->massage}}</td>
        {{-- <td>{{$item->status}}</td> --}}
        <td> <a href=" {{route('rr',$item->id)}}">edite</a> </td>
          {{-- {{route('editecont',$item->id)}} --}}
        {{-- <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td> --}}
        {{-- <a></a> --}}
      </tr>
      @endforeach                                                                            
    
      
    </tbody>
  </table>
@endsection