<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action="/insert" method="post">
		<table>
			<tr>
				<!-- {{ csrf_field() }} -->
				<!-- laravel security -->
				
				<td>First Name : </td>
				<td><input type="text" name="firstName"></td>
			</tr>			
			<tr>
				<td>Last Name : </td>
				<td><input type="text" name="lastName"></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
			    <td><input type="submit" name="submit" value="Add"></td>
			</tr>	

		</table>

</body>
</html>