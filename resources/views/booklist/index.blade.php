<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book List</title>
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
		<form method="post" action="/book/search">
			<input style="width:60%;" type="text" name="searchbook" placeholder="Book Name"> 
	    	<input type="submit" value="Search" class="btn btn-info" style="margin-left: 400px;">
	    </form>
	</div>
    <div class="reg_form">
		<table class="table table-bordered">
			<tr align="center" style="background: #555555; color: #fff;">
				<th>
					Book Id
				</th>
				<th>
					Book Name
				</th>
				<th>
					Author Name
				</th>
				<th>
					Book Copy
				</th>
				<th>
					Options
				</th>
			</tr>
			@foreach($booklist as $book)
			<tr>
				<td align="center">
					{{$book->bookid}}
				</td>
				<td align="center">
					{{$book->bookname}}
				</td>
				<td align="center">
					{{$book->authorname}}
				</td>
				<td align="center">
					{{$book->bookcopy}}
				</td>
				<td align="center">
					<a href="/book/{{$book->bookid}}" class="btn btn-info" role="button">Details</a> | 
					<a href="/book/{{$book->bookid}}/edit" class="btn btn-info" role="button">Edit</a> | 
					<a href="/book/{{$book->bookid}}/delete" class="btn btn-info" role="button">Delete</a> | 
					<a href="/book/add/{{$book->bookid}}" class="btn btn-info" role="button">Add Copy</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>