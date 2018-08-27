<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Borrow Requests</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css') }}" media="all" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<div class="header-area">
        <a href="/usermain" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/admin" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/logout/admin" class="btn btn-info" role="button">Log Out</a></span>
        
    </div>
    <form method="post" action="/borrow/search">
		<input style="width:40%; margin-left: 200px;" class="form-control" type="text" name="searchuser" placeholder="User Id"> 
    	<input type="submit" value="Search" class="btn btn-info" style="margin-left: 400px;">
    </form>
	<table class="table table-bordered">
			<tr align="center">
				<th>
					Borrow Id
				</th>
				<th>
					User Id
				</th>
				<th>
					User Name
				</th>
				<th>
					Book Name
				</th>
				<th>
					Req Date
				</th>
				<th>
					Action
				</th>
			</tr>
			<tr>
			@foreach($ureq as $borrow)
				<td align="center">
					{{$borrow->id}}
				</td>
				<td align="center">
					{{$borrow->userid}}
				</td>
				<td align="center">
					{{$borrow->username}}
				</td>
				<td align="center">
					{{$borrow->bookname}}
				</td>
				<td align="center">
					{{$borrow->reqdate}}
				</td>
				<td align="center">	
					<a href="/borrowreqaccept/{{$borrow->id}}" class="btn btn-info" role="button">Accept</a> | 
					<a href="/borrow/{{$borrow->id}}/{{$borrow->userid}}/{{$borrow->bookid}}" class="btn btn-info" role="button">Reject</a>
				</td>
			</tr>
			@endforeach
		</table>
</body>
</html>