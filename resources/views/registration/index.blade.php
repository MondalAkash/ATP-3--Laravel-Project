<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	
</head>
<body>
	<div class="header-area">
        <a href="/" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/login" class="btn btn-info" role="button">Login</a></span>
        
    </div>

    <div class="reg_form">
	<form method="post" action="/user">
		
			<legend class="text-center">
				Registration
			</legend>
			<table class="table">
				<tr style="height:50px;" >
					<td>
						User Id:
					</td> 
					@foreach($result as $res)
						<td>
							<label >U000-{{$res->id+1}}</label>
							<input type="hidden" name="userid" value="U000-{{$res->id+1}}" id="" readonly> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	<span style="color: #ff5c33;">**Please Use This ID To Log in</span>
							
						</td>
					@endforeach
				</tr>
				<tr style="height:50px;">
					<td>
						<label for="un" style="cursor: pointer;">User Name (Full Name): </label>
					</td>
					<td>
						<input class="form-control" style="width: 300px;" type="text" name="username" id="un" placeholder="User Name">
						@if($errors->any())
							{{$errors->first('username')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
					<td>
						<label for="">Gender: </label>
					</td>
					<td>
						<input id="male" type="radio" value="male" name="gender" style="cursor: pointer;"/><label for="male" style="cursor:pointer">Male</label>
						<input id="female" type="radio" value="female" name="gender" style="cursor: pointer;"/><label for="female" style="cursor:pointer">Female</label>
						@if($errors->any())
							{{$errors->first('gender')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
					<td>
						Date Of Birth: 
					</td>
					<td>
						<input class="form-control" style="width: 300px;" type="date" name="dob">
						@if($errors->any())
							{{$errors->first('dob')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
					<td>
						<label for="pm" style="cursor:pointer;">Contact No.: </label>
					</td>
					<td>
						<input class="form-control" style="width: 300px;" id="pm" type="text" placeholder="Phone/Mobile No." name="contact"/>
						@if($errors->any())
							{{$errors->first('contact')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
					<td>
						<label for="ad" style="cursor: pointer;">Address: </label>
					</td>
					<td>
						<input class="form-control" style="width: 300px;" type="text" name="address" id="ad" placeholder="Address">
						@if($errors->any())
							{{$errors->first('address')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
					<td>
						<label for="pw" style="cursor: pointer;">Password: </label>
						 
					</td>
					<td>
						<input class="form-control" style="width: 300px;" type="password" name="password" id="pw" placeholder="Password">
						@if($errors->any())
							{{$errors->first('password')}}
						@endif
					</td>
				</tr>
				<tr style="height:50px;">
						<td>
							<input class="btn btn-primary active" type="submit" value="Sign Up" >
						</td>
				</tr>
			</table>
		
	</form>
</div>
</body>
</html>