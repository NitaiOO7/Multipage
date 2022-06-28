<!DOCTPE html>
<html>
<head>
<title>View Employee Records</title>
</head>
<body>
<a href="{{route('name')}}">add</a>
<table border = "1">
<tr>
   
<td>Name</td>
<td>Email</td>
<td>Phone_number</td>
<td>Password</td>
</tr>

@foreach($employee as $emp )

<tr>
    <td>{{$emp->name}}</td>
    <td>{{$emp->email}}</td>
    <td>{{$emp->phone_number}}</td>
    <td>{{$emp->password}}</td>
</tr>
@endforeach
</table>
</body>
</html>