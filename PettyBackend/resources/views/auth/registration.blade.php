<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4" style="margin-top:20px;">
        <h4>Registration</h4>  
        <hr>  
        <form action="{{route('register-user')}}" method="post">
           @if(Session::has('success'))
           <div class="alert alert-success">{{Session::get('success')}}</div>
           @endif
           @if(Session::has('fail'))
           <div class="alert alert-danger">{{Session::get('fail')}}</div>
           @endif
        @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Full Name" 
                name="name" value="{{old('name')}}"/>
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" 
                name="email" value="{{old('email')}}"/>
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" 
                name="password" value="{{old('password')}}"/>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
               <button class="btn btn-block btn-primary" type="submit">Register</button> 
            </div>
            <a href="login">Already Registered User !! Login Here.</a>
        </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>