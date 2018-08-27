<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Details</title>
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
    <br>
    @foreach($users as $user)
    <a href="/user" class="btn btn-info" role="button" style="margin-left: 650px; margin-bottom: 10px;">Go Back</a> | 
    <a href="/user/{{$user->userid}}/edit" class="btn btn-info" role="button" style="margin-bottom: 10px;">Edit Information</a>
    <table class="table table-bordered" style="width: 50%; margin-left: 400px;">
    	
    	<tr>
    		<td>
    			DB Id:
    		</td>
    		<td>
    			{{$user->id}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			User Id: 
    		</td>
    		<td>
    			{{$user->userid}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			User Name: 
    		</td>
    		<td>
    			{{$user->username}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Gender: 
    		</td>
    		<td>
    			{{$user->gender}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Dob: 
    		</td>
    		<td>
    			{{$user->dob}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Contact: 
    		</td>
    		<td>
    			{{$user->contact}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Address: 
    		</td>
    		<td>
    			{{$user->address}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Password: 
    		</td>
    		<td>
    			{{$user->password}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Borrow Limit: 
    		</td>
    		<td>
    			{{$user->borrowlimit}}
    		</td>
    	</tr>
    	@endforeach
    </table>
</body>
</html>