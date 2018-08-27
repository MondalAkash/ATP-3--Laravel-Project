<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Home</title>
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
    <div class="admin_background">
        <iframe src="http://free.timeanddate.com/clock/i67i3ifd/n73/fn12/fs18/fcfff/tc22d/ftb/bls0/brs0/bts4/btc00b" frameborder="0" width="125" height="30" style="margin-left: 700px;"></iframe>
        <div class="mid-low">
        	<a href="/user/create" target="_blank" class="btn btn-info" role="button" style="margin-right: 10px;">Create User</a>
        	<a href="/book/create" class="btn btn-info" role="button" style="margin-right: 10px;">Create Book</a>
        	<a href="/user" class="btn btn-info" role="button" style="margin-right: 10px;">User List</a>
        	<a href="/book" class="btn btn-info" role="button" style="margin-right: 10px;">Book List</a>
            <br><br>
            <a href="/borrowreq" class="btn btn-info" role="button" style="margin-right: 10px;">Borrow Requests</a>
            <a href="/finalborrow" class="btn btn-info" role="button" style="margin-right: 10px; margin-top: 10px;">Borrow Status</a>
            <a href="/report" class="btn btn-info" role="button" style="margin-right: 10px; margin-top: 10px; width: 193px;">Report</a>
        </div>
    </div>
</body>
</html>