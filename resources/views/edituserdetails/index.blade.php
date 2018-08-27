<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit User Details</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	
<body>
	<div class="header-area">
        <a href="/admin" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/admin" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/logout/admin" class="btn btn-info" role="button">Log Out</a></span>
        
    </div>
		<a href="/user" class="btn btn-info" role="button" style="margin-left: 650px;">Go Back</a>
		<form method="post" action="/user/{{$user->userid}}">
			<input type="hidden" name="_method" value="put">
			<table class="table table-striped" style="width: 50%; margin-left: 350px;">
				<tr>
					<td>
						User Id:
					</td>
					<td>
						<label >{{$user->userid}}</label>
						<input type="hidden" name="userid" value="{{$user->userid}}">
					</td>
				</tr>
				<tr>
					<td>
						User Name:
					</td>
					<td>
						<input type="text" name="username" id="" value="{{$user->username}}">
						@if($errors->any())
							{{$errors->first('username')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Gender: 
					</td>
					<td>
			 

						<select name="gender" id="">
							<option value="{{$user->gender}}">{{$user->gender}}</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="others">Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Date Of Birth:
					</td>
					<td>
						<input type="date" name="dob" id="" value="{{$user->dob}}">
						@if($errors->any())
							{{$errors->first('dob')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Contact:
					</td>
					<td>
						<input type="text" name="contact" id="" value="{{$user->contact}}">
						@if($errors->any())
							{{$errors->first('contact')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Address: 
					</td>
					<td>
						<input type="text" name="address" id="" value="{{$user->address}}">
						@if($errors->any())
							{{$errors->first('address')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Password: 
					</td>
					<td>
						<input type="text" name="password" id="" value="{{$user->password}}">
						@if($errors->any())
							{{$errors->first('password')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Type: 
					</td>
					<td>
						<label>{{$user->type}}</label>
						<input type="hidden" name="type" value="{{$user->type}}">
					</td>
				</tr>
				<tr>
					<td>
						Borrow Limit: 
					</td>
					<td>
						<input type="number" name="borrowlimit" id="" value="{{$user->borrowlimit}}">
					</td>
				</tr>
				
					
			</table>
			<input type="submit" value="Update">
		</form>
	
</body>
</html>