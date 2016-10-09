<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<form method="POST" action="form/getData">

<input type="hidden" name="_token" value="{{csrf_token()}}">

<label for="name">Name</label>
<input type="text" name="name">
<br>

<label for="email">Email</label>
<input type="email" name="email">
<br>

<label for="phone">phone</label>
<input type="phone" name="phone">
<br>

<label for="address">address</label>
<input type="text" name="address">
<br>

<label for="password">password</label>
<input type="password" name="password">

<br>


<input type="submit" name="submit">

</body>
</html>