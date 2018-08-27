<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{session('user')}}</title>
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
    <div class="user_welcome">
    	<h3>Welcome {{session('username')}}</h3>
    </div>
	
	<div class="mid-low">
	    <div class="create_user">
	    	<a href="/userbook" class="btn btn-info" role="button">Search Book</a>
	    </div>

	    <div class="create_book">
	    	<a href="/borrow/{{session('user')}}" class="btn btn-info" role="button">Requested Book</a>
	    </div>

	    <div class="book_list">
	    	<a href="/borrowrequestacceptuser/{{session('user')}}" class="btn btn-info" role="button">Issued Book</a>
	    </div>
	</div>

</body>
</html>