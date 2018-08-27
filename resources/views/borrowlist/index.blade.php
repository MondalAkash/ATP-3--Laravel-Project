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
        <a href="/usermain" style="text-decoration: none; "><h1>Library Management System</h1></a>
    </div>
    <div class="mid-area">
        <span><a href="/usermain" class="btn btn-info" role="button">Home</a></span>
        <span><a href="/logout/user" class="btn btn-info" role="button">Log Out</a></span>
        
    </div>

    <div class="reg_form">
		<table class="table table-bordered">
			<tr align="center">
				<th>
					Borrow Id
				</th>
				<th>
					Book Name
				</th>
				<th>
					Comment
				</th>
				<th>
					Options
				</th>
			</tr>
			<tr>
			@foreach($borrow as $borrow)
				<td align="center">
					{{$borrow->id}}
				</td>
				<td align="center">
					{{$borrow->bookname}}
				</td>
				@if($borrow->status ==0)
					<td align="center">
						Waiting For Approval
					</td>
					<td align="center">	
						<a href="/borrow/{{$borrow->id}}/{{session('user')}}/{{$borrow->bookid}}/delete">Remove</a>
					</td>
				@endif
				@if($borrow->status ==1)
					<td align="center">
						Approved
					</td>
				@endif
				@if($borrow->status == 2)
					<td align="center">
						Returned
					</td>
				@endif
				
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>