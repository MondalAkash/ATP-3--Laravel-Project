<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Issued Books</title>
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
    	<tr align="center" style="background: #555555; color: #fff;">
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
    	</tr>
    	@foreach($accept as $acc)
    	<tr>
    		
    			<td align="center">
    				{{$acc->bookname}}
    			</td>
    			<td align="center">
    				{{$acc->borrowdate}}
    			</td>
    			<td align="center">
    				{{$acc->returndate}}
    			</td>
                @if($acc->status == 'issued')
        			<td align="center">
        				Issued
        			</td>
                @endif
                @if($acc->status == 'returned')
                    <td align="center">
                        Returned
                    </td>
                @endif
			
    	</tr>
    	@endforeach
    </table>
</body>
</html>