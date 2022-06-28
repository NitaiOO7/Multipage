<form action="/number" method='post'>
  @csrf
  <label for="phone_number">Enter Phone_Number:</label><br>
  <input type="number" id="phone_number" name="phone_number" ><br>
  
  <input type="submit" value="Next">
  <a href="{{ route('email') }}" >Previous</a>
  <span >
 @error('phone_number')
 {{$message}}
 @enderror
</span>
</form> 