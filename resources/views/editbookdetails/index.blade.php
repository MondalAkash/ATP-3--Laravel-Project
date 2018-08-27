<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Book Details</title>
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
		<a href="/book" class="btn btn-info" role="button" style="margin-left: 650px;">Go Back</a>
		<form method="post" action="/book/{{$book->bookid}}">
			<input type="hidden" name="_method" value="put">
			<table class="table table-striped" style="width: 50%; margin-left: 350px;">
				<tr>
					<td>
						Book Id:
					</td>
					<td>
						<label >{{$book->bookid}}</label>
						<input type="hidden" name="bookid" value="{{$book->bookid}}">
					</td>
				</tr>
				<tr>
					<td>
						<label style="cursor: pointer;" for="bn">Book Name:</label>
					</td>
					<td>
						<input class="form-control" type="text" name="bookname" id="bn" value="{{$book->bookname}}">
						@if($errors->any())
							{{$errors->first('bookname')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						<label style="cursor: pointer;" for="an">Author Name:</label>
					</td>
					<td>
						<input class="form-control" type="text" name="authorname" id="an" value="{{$book->authorname}}">
						@if($errors->any())
							{{$errors->first('authorname')}}
						@endif
					</td>
				</tr>
				<tr>
					<td>
						<label style="cursor: pointer;" for="bc">Book Copy: </label>
					</td>
					<td>
						<input class="form-control" type="text" name="bookcopy" id="bc" value="{{$book->bookcopy}}" readonly>
						@if($errors->any())
							{{$errors->first('bookcopy')}}
						@endif
					</td>
				</tr>
			</table>
			<input type="submit" value="Update" class="btn btn-warning" style="margin-left: 650px;">
		</form>
</body>
</html>