<!DOCTYPE html>
<html>
<head>
	<title>add data</title>
</head>
<body>
	<table align="center">
	
		<form action="../update/{{$array->id}}" method="post" >
				@csrf 
			<tr>
				<td>
					first name
				</td>
				<td>
					<input type="text" name="firstname" value="{{$array->firstname}}" >
				</td>
			</tr>
			<tr>
				<td>
					last name name
				</td>
				<td>
					<input type="text" name="lastname" value="{{$array->lastname}}">
				</td>
			</tr>
			<tr>
				<td>
					sem
				</td>
				<td>
					<select name="sem">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					address
				</td>
				<td>
					<input type="text" name="address" value="{{$array->address}}">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="edit" name="save">save</button>
				</td>
			</tr>
		</table>
    </form>

</body>
</html>