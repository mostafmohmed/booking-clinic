<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>id </th>
            <th> uset_name </th>
            <th> password </th>
            <th>email </th>
            <th>email </th>
        </thead>
        <tbody>
            <tr>
                <td>  
                    <a class="btn btn-primary" href="{{route('major.create')}}" >create</a>  
                    @php
                    echo $sucsess??null;
                        
                    @endphp
                </td>
            </tr>
        @foreach($major as $v)
        
       
      
        <tr>
        <td>  {{   $v->id }} </td>
        <td>  {{   $v->title }} </td>
        <td>  {{   $v->created_at }} </td>
<td>      
     <form action="{{route('majo.deletm',$v->id)}}" method="post" >
     @method('DELETE') 
     @csrf
      <button> delet  </button>
     </form>
      </td>
      <td>   
         <a class="btn btn-primary" href="{{route('majo.edite',$v->id)}}" >edite</a> 
         
         </td>
        </tr>
        @endforeach
        
        </tbody>
           </table>
</body>
</html>