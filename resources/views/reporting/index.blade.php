<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Report</title>
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
    	<a href="/report/hbb" class="btn btn-info" role="button">Highest Borrowed Book</a>
    	<a href="#" class="btn btn-info" role="button">Highest Borrower</a>
    	<a href="#" class="btn btn-info" role="button">Earliest borrower</a>
</body>
</html>