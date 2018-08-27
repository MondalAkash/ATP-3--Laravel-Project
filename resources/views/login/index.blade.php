<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
</head>
<body>
	<div class="header-area">
        <a href="/" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>

    <div class="mid-area">
       <a href="/" class="btn btn-info" role="button">Home</a>
       <a href="/user/create" class="btn btn-info" role="button">Registration</a>
       <a href="/login" class="btn btn-info" role="button">Login</a>
    </div>
<div class="middle" style="position: fixed;">
	<img src="{{url('/images/169825.jpg')}}" alt="Library Image" height="79.25%" width="100%">
</div>
<div class="login_form" style="position: relative; margin-left: 469px;margin-top: 159px;">
	<form method="post">
		<fieldset style="border: none; ">
			<legend align="center">
				Login
			</legend>
			<table>
				<tr>
					<td>
						User Id: 
					</td>
					<td>
						<input style="width:150%;" type="text" name="userid" id="" placeholder="User Name">
						@if($errors->any())
							<span>{{$errors->first('userid')}}</span>
						@endif
					</td>
				</tr>
				<tr>
					<td>
						Password: 
					</td>
					<td>
						<input style="width:150%;" type="password" name="password" id="" placeholder="Password">
						@if($errors->any())
							<span>{{$errors->first('password')}}</span>
						@endif
					</td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-info" type="submit" value="Login"><br>
					</td>
				</tr>
						
			</table>
			<span>New User?<a href="/user/create">Sign Up</a></span>
		</fieldset>
	</form>
</div>
</body>
</html>