<!DOCTYPE html>
<html>
<body>
<h2>Update</h2>
<form  action="/submit" method ='POST'>
@csrf
  <label>title</label><br>
  <input type="text" name="title" value="{{$foods->title}}" ><br>
  <label>instruction</label><br>
  <input type="text" name="instruction" value="{{$foods->Instruction}}" ><br>
  <label>ingredients</label><br>
  <input type="text" name="ingredients" value="{{$foods->Ingredients}}" ><br>
  <label>serving</label><br>
  <input type="text" name="serving" value="{{$foods->serving}}" ><br>
  <label>nutrients</label><br>
  <input type="text" name="nutrients" value="{{$foods->nutrients}}"><br>
  <label for="type">type</label>
  <select name="type">
    <option value="veg">veg</option>
    <option value="nonveg">nonveg</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
  <span class="sucess"> {{session('sucess')}}	</span>
</form> 

</body>
</html>