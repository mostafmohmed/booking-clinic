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
        
      @foreach ($booking as $item)
          
     
      <tr>
        <th scope="row">1</th>
        <td>{{$item->email}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        {{-- <td>{{$item->status}}</td> --}}
        <td> <a href=" {{route('booking.edite',$item->id)}}">edite</a> </td>
          {{-- {{route('editecont',$item->id)}} --}}
        {{-- <td> <a href=" {{route('delet',$item->id)}}">djjje</a> </td> --}}
        {{-- <td> <a href=" {{route('booking.delet',$item->id)}}">delete</a> </td> --}}
        <td>
        <form method="POST" action="{{ route('booking.delet',$item->id) }}">
            @csrf
            @method('delete')
            
            <button type='submit' class="text-inverse" data-toggle="tooltip">
              <i class="fa fa-trash"></i>
            </button>
            </form></td>
        {{-- <a></a> --}}
        
      </tr>
      @endforeach                                                                            
    
      
    </tbody>
  </table>
@endsection