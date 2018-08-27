<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@foreach($books as $book)
	<title>{{$book->bookname}}</title>
	@endforeach
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
</head>
<body>
	<div class="header-area">
        <a href="/admin" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/admin">Home</a></span>
        <span><a href="/logout/admin" class="btn btn-info" role="button">Log Out</a></span>  
    </div>
    @foreach($books as $book)
    <a href="/book" class="btn btn-info" role="button" style="margin-left: 650px; margin-bottom: 10px;">Go Back</a> | 
    <a href="/book/{{$book->bookid}}/edit" class="btn btn-info" role="button" style="margin-bottom: 10px;">Edit Information</a>
    <table class="table table-bordered" style="width: 50%; margin-left: 400px;">
    	<tr>
    		<td>
    			Book Id:
    		</td>
    		<td>
    			{{$book->bookid}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Book Name: 
    		</td>
    		<td>
    			{{$book->bookname}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Author Name: 
    		</td>
    		<td>
    			{{$book->authorname}}
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Book Copy: 
    		</td>
    		<td>
    			{{$book->bookcopy}}
    		</td>
    	</tr>
    	@endforeach
    </table>
</body>
</html>