<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Food table</h2>


<table>
  <tr>
   <th>Id</th>
    <th>title</th>
    <th>instruction</th>
    <th>ingredients</th>
    <th>serving</th>
    <th>nutrients</th>
    <th>type</th>
    <th>update</th>
    <th>Delete</th>
    
    </tr>
    @foreach($foods as $food)      
<tr>
    <td>{{$food->Id}}</td>
    <td>{{$food->title}}</td>
    <td>{{$food->Instruction}}</td>   
    <td>{{$food->Ingredients}}</td>
    <td>{{$food->serving}}</td>
    <td>{{$food->nutrients}}</td>
    <td>{{$food->type}}</td>
    <td><a href="update/{{$food->Id}}">Update</td></a>
    <td><a href="delete/{{$food->Id}}">Delete</td></a>  
  </tr>
    @endforeach  
</table>
<button><a href="{{url('/add')}}"> Add  a new entry 
</body>
</html>
