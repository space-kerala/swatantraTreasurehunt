<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signin.css">
</head>
<body>


 @if (Auth::guest())
                            <a class="loginbutton" href="{{ route('login') }}" style="color:white;">Login</a>
                            <a class="registerbutton" href="{{ route('register') }}"" style="color:white;">Register</a>

@endif


@if (session('statustrue'))
    <div class="alert alert-success">
        {{ session('statustrue') }}
    </div>
 @elseif((session('statusalready')))
    <div class="alert alert-warning">
        {{ session('statusalready') }}
    </div>
 @elseif((session('statusfalse')))
     <div class="alert alert-danger">
        {{ session('statusfalse') }}
    </div>

@endif

<div class="form-error">
@include('layout.errors')
</div>

<!--ball in the box div -->
<div class="box"></div>



<div class="container1">
@if((session('status0')))
    <div class="alert alert-danger">
        {{ session('status0') }}
        {{ session()->forget('status0')}}
    </div>

@endif
<form method="POST" action="{{ route('login') }}">
{{csrf_field() }}
<p id="headsignup"><strong>Login</strong></p>
<div class="form-signin">
<label for="email" id="controllabel">* Email</label>
 <input type="email" name="email" class="useridlogin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required>
 
  <label for="password" id="controllabel">Password</label>
 <input type="password" class="passwordlogin" id="passwordlogin" name="password" placeholder="Enter Password" required>
 <br>
  <button id="subsignin" type="submit">Sign In</button>
<a href="{{route('password.request')}}" style="text-decoration:none;"><p id="forgotpass">forgot password</p></a>
 </div>
 
</form>
</div>
</body>
</html>