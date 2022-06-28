<form action="/preview" method='post'>
  @csrf
  <label for="name">Enter Name:</label><br>
  <input type="text" id="name" name="name" value="{{$data['name']}}"><br>
  <label for="email">Enter Email:</label><br>
  <input type="text" id="email" name="email" value="{{$data['email']}}"><br>
  <label for="phone_number">Enter Phone_Number:</label><br>
  <input type="number" id="phone_number" name="phone_number" value="{{$data['phone_number']}}"><br>
  <label for="password">Enter Password:</label><br>
  <input type="text" id="password" name="password" value="{{$data['password']}}" ><br>


  <input type="submit" value="submit">
 

</form> 