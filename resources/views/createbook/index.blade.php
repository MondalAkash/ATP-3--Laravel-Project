<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Book</title>
	<link rel="stylesheet" href="{{url('/css/style.css') }}">
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
	<legend class="text-center">
				Add New Book 
	</legend>
	
	<form method="post" action="/book">
		<table class="table" style="width: 40%; margin-left: 400px;" >
			<tr>
				
				<td>
					<label for="bn" style="cursor:pointer;">Book Name: </label>
					
				</td>
				<td> 
					<input class="form-control" style="width: 250px; height: 30px; " type="text" name="bookname" id="bn" placeholder="Book Name">
				</td>
				<td>
					@if($errors->any())
						{{$errors->first('bookname')}}
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="an" style="cursor:pointer;">Author Name:</label>
					 
				</td>
				<td>
					<input class="form-control" style="width: 250px;height: 30px; " type="text" name="authorname" id="an" placeholder="Author Name">
				</td>
				<td>
					@if($errors->any())
						{{$errors->first('authorname')}}
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<label for="bc" style="cursor:pointer;">Book Copy:</label>
					 
				</td>
				<td>
					<input class="form-control" style="width: 250px;height: 30px; " type="text" name="bookcopy" id="bc" placeholder="Book Copy"> 
				</td>
				<td>
					@if($errors->any())
						{{$errors->first('bookcopy')}}
					@endif
				</td>
			</tr>	
			</table>
		<input class="btn btn-primary" type="submit" value="Add Book" style="margin-left: 650px;">
	</form>
	
</body>
</html>