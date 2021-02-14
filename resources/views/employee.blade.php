<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employees</title>
	<style >
		#emp{
			font-family: Arial,Helvetica,sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		#emp td,#emp th{
			border: 1px solid #ddd;
			padding: 8px;
		}
		#emp tr:nth-child(even){
            background-color: #0bfdfd;

		}
		#emp th{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: #fff;
		}
	</style>
</head>
<body>
	<table id="emp">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Salary</th>
				<th>Department</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $emp)
               <tr>
               	<td>{{$emp->id}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->email}}</td>
                <td>{{$emp->phone}}</td>
                <td>{{$emp->salary}}</td>
                <td>{{$emp->department}}</td>

               </tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>