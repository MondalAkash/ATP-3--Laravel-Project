<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book List For User</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>
	<div class="header-area">
        <a href="/usermain" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/usermain" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/logout/user" class="btn btn-info" role="button">Log Out</a></span>
        
    </div>
    <div class="search_box">
		<form method="post" action="/booksearchbyuser">
	    	<input style="width:60%;" type="text" name="searchbook" placeholder="Book Name"> 
	    	<input class="btn btn-info" type="submit" value="Search">
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
					Available Book Copy
				</th>
				<th>
					Options
				</th>
			</tr>
			@foreach($booklist as $book)
			<tr>
				@if($book->bookcopy != 0)
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
						<a href="/borrow/{{$book->bookid}}/{{session('user')}}" class="btn btn-info" role="button">Borrow Book</a>
					</td>
				@endif
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>