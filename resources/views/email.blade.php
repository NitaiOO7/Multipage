<form action="/email" method='post'>
  @csrf
  <label for="email">Enter Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <span >
 @error('email')
 {{$message}}
 @enderror
</span>
  <label for="email">Enter Confirm_Email:</label><br>
  <input type="text" id="email" name="email_confirmation" ><br>
  <input type="submit" value="Next">
  <a href="{{ route('name') }}" >Previous</a>
  <span >
 @error('email_confirmation')
 {{$message}}
 @enderror
</span>
</form> 