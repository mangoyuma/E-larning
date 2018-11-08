<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br />
	<div class="container box">
		<h3 align="center">Login System</h3><br>
		<form method="post">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Enter Email</label>
				<input type="email" name="email" class="form-control" />
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="Password" name="Password" class="form-control" />		
			</div>	
			<div class="form-group">
				<input type="submit" name="login" class="btnbtn-primary" value="Login" />
			</div>
		</form>
 
</body>
</html>