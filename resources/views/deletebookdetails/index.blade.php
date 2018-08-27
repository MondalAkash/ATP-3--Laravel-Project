<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Book</title>
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
    <table class="table table-striped" style="width: 50%; margin-left: 350px;">
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
                Book Copy: 
            </td>
            <td>
                {{$book->bookcopy}}
            </td>
        </tr>
    </table>
    <hr>
    @if($book->bookcopy>0)
    <div class="alert alert-info">
	  <strong>Warning!</strong> You Can't Delete This Book Now
	</div>
	@else
		<div class="alert alert-warning">
		  <strong>Warning!</strong> Are you sure you want to delete?
		</div>
	    <form method="post" action="/book/{{$book->bookid}}">
	        <input type="hidden" name="_method" value="delete">
	        <input type="submit" value="Confirm" class="btn btn-warning" style="margin-left: 650px;">
	    </form>
	@endif
</body>
</html>