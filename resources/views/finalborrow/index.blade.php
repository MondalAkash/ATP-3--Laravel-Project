<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Borrow Table</title>
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
    <table class="table table-bordered">
    	<tr align="center" style="background: #555555; color: #fff;">
    		<th>
    			Borrow Id
    		</th>
    		<th>
    			User Id
    		</th>
    		<th>
    			Book Name
    		</th>
    		<th>
    			Issued Date
    		</th>
    		<th>
    			Return Date
    		</th>
    		<th>
    			Status
    		</th>
    		<th>
    			Options
    		</th>
    	</tr>
    	@foreach($fb as $f)
    	<tr>
    		<td align="center">
    			{{$f->id}}
    		</td>
    		<td align="center">
    			{{$f->userid}}
    		</td>
    		<td align="center">
    			{{$f->bookname}}
    		</td>
    		<td align="center">
    			{{$f->borrowdate}}
    		</td>
    		<td align="center">
    			{{$f->returndate}}
    		</td>
    		<td align="center">
    			{{$f->status}}
    		</td>
    		@if($f->status == 'issued')
    			<td align="center">
	    			<a href="/return/{{$f->id}}/{{$f->userid}}/{{$f->bookid}}/{{$f->reqdate}}" class="btn btn-info" role="button">Return</a>
	    		</td>
    		@endif
    	</tr>
    	@endforeach
    </table>
</body>
</html>