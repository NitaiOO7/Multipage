<form action="/password" method='post'>
  @csrf
  <label for="password">Enter Password:</label><br>
  <input type="text" id="password" name="password" ><br>
  <span >
 @error('password')
 {{$message}}
 @enderror
</span>
  <label for="password">Enter Confirm_Password:</label><br>
  <input type="password" id="password" name="password_confirmation" ><br>
  <input type="submit" value="Next">
  <a href="{{ route('number') }}" >Previous</a>
  <span >
 @error('password_confirmation')
 {{$message}}
 @enderror
</span>
</form> 