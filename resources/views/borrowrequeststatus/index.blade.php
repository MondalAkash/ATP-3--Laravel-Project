<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Borrow Request Status</title>
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
	<table class="table table-bordered">
			<tr align="center">
				<th>
					Borrow Id
				</th>
				<th>
					Book Name
				</th>
				<th>
					Status
				</th>
			</tr>
			<tr>
			@foreach($borreq as $borrow)
				@if($borrow->id)
				<td align="center">
					{{$borrow->id}}
				</td>
				<td align="center">
					{{$borrow->bookname}}
				</td>
				<td align="center">
					Waiting For Approval
				</td>
				@endif
			</tr>
			@endforeach
		</table>
</body>
</html>