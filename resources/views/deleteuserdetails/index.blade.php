<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete User</title>
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
    <a href="/user" class="btn btn-info" role="button" style="margin-left: 650px;">Go Back</a>
    <table class="table table-striped" style="width: 50%; margin-left: 350px;">
        <tr>
            <td>
                User Id: 
            </td>
            <td>
                {{$user->userid}}
            </td>
        </tr>
        <tr>
            <td>
                User Name: 
            </td>
            <td>
                {{$user->username}}
            </td>
        </tr>
        <tr>
            <td>
                Contact Number: 
            </td>
            <td>
                {{$user->contact}}
            </td>
        </tr>
        <tr>
            <td>
                Borrow Limit: 
            </td>
            <td>
                {{$user->borrowlimit}}
            </td>
        </tr>
    </table>
    <hr>
    @if($user->borrowlimit < 3)
        <div class="alert alert-info">
          <strong>Warning!</strong> You Can't Delete This User Now
        </div>
    @else
        <div class="alert alert-warning">
          <strong>Warning!</strong> Are you sure you want to delete?
        </div>    
        <form method="post" action="/user/{{$user->userid}}">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="Confirm" class="btn btn-warning" style="margin-left: 650px;">
        </form>
    @endif
</body>
</html>