<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="header-area">
        <a href="/admin" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/admin" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/logout/admin" class="btn btn-info" role="button">Log Out</a></span>
    </div>
    <div class="search_box">
	    <form method="post" action="/user/search">
	    	<input style="width:50%;" type="text" name="searchuser" placeholder="User Id"> 
	    	<input type="submit" value="Search" class="btn btn-info">
	    </form>
	 </div>
    
    <div class="reg_form">
		<table class="table table-bordered">
			<tr align="center" style="background: #555555; color: #fff;">
				<th>
					User Id
				</th>
				<th>
					User Name
				</th>
				<th>
					Contact
				</th>
				<th>
					Borrow Limit
				</th>
				<th>
					Options
				</th>
			</tr>
			@foreach($userlist as $user)
			<tr>
				<td align="center">
					{{$user->userid}}
				</td>
				<td align="center">
					{{$user->username}}
				</td>
				<td align="center">
					{{$user->contact}}
				</td>
				<td align="center">
					{{$user->borrowlimit}}
				</td>
				<td align="center">
					<a href="/user/{{$user->userid}}" class="btn btn-info" role="button">Details</a> | 
					<a href="/user/{{$user->userid}}/edit" class="btn btn-info" role="button">Edit</a> | 
					<a href="/user/{{$user->userid}}/delete" class="btn btn-info" role="button">Delete</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>