<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bddd{
            background:black;
        }
    </style>
</head>

<body>
   @php
     echo $i;  
   @endphp
   <table>
<thead>
    <th>id </th>
    <th> uset_name </th>
    <th> password </th>
    <th>email </th>
</thead>
<tbody>
@foreach($u as $v)
@foreach($u as $v)

@dd($loop)
@endforeach
<tr  class=" @if ($loop->first) bddd @endif" >
<td>  {{   $v['name'] }} </td>
<td>  {{   $v['id'] }} </td>
<td>  {{   $v['city'] }} </td>
</tr>
@endforeach

</tbody>
   </table>
</body>
</html>