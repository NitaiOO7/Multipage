<form action="/name" method='post'>
  @csrf
  <label for="name">Enter Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <input type="submit" value="Next">
  <span >
 @error('name')
 {{$message}}
 @enderror
</span>

</form> 