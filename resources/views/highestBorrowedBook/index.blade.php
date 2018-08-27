<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Highest Borrowed Book</title>
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
    <a href="/report">Go Back</a>
    <table class="table table-bordered">
    	<tr align="center" style="background: #555555; color: #fff;">
    		<th>
				Rank
    		</th>
    		<th>
    			Book Name
    		</th>
    		<th>
    			Copy
    		</th>
    	</tr>
    	@php
    				$i = 0;
    				
				@endphp
    	@foreach($borrow as $br)
    	<tr>
    		<td align="center">
    			@php
				$i++;
    			@endphp
    				{{$i}}
    			
    		</td>
    		<td align="center">
    			{{$br->bookname}}
    		</td>
    		<td align="center">
    			{{$br->ct}}
    		</td>
    	</tr>
    	@endforeach
    </table>
</body>
</html>