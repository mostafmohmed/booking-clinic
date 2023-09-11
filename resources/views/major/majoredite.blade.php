<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form  action="{{route('majo.update',$major->id)}}" method="post">
    <input type="text" id="css" name="title" value="{{$major->title}}">
    {{-- @method('UPDATE') 
        --}}
        @csrf
         <button> update  </button>
  
  
</form>                      



    
</body>
</html>