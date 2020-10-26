<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	@csrf
	<table border="10px" align="center"  width="50%">
		<tr>
			<td colspan="6"><a href="create">add data</a></td>
		</tr>
		<tr>
			<td>
				ID
			</td>
			<td>
				first name
			</td>
			<td>
				last name
			</td>
			<td>
				sem
			</td>
			<td>
				address
			</td>
			<td>
				action
			</td>
		</tr>
		@foreach($array as $s)
		<tr>
			<td>
				{{$s->id}}
			</td>
			<td>
				{{$s->firstname}}
			</td>
			<td>
				{{$s->lastname}}
			</td>
			<td>
				{{$s->sem}}
			</td>
			<td>
				{{$s->address}}
			</td>
			<td>
				<a href='delete/{{$s->id}}'>delete</a>
				<a href="edit/{{$s->id}}">edit</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>