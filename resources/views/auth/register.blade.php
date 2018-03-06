<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signup.css">
</head>
<body>
@if (Auth::guest())
                            <a class="loginbutton" href="{{ route('login') }}" style="color:white;">Login</a>
                            <a class="registerbutton" href="{{ route('register') }}"" style="color:white;">Register</a>


@endif

<!--ball in the box div -->
<div class="box"></div>

@include('layout.errors');
<div class="container1">
<form method="POST" action="{{ route('register') }}" id="registerform">

{{csrf_field() }}
<p id="headsignup"><strong>Sign Up</strong></p>
<div class="form-signin">
<label for="useridlogin" id="controllabel">* User Name</label>
    <input type="text" spellcheck=false class="useridlogin" id="name"  name="name" placeholder="Enter User Name " required>
    
    
    

    
 <label for="email" id="controllabel">* Email</label>
 <input type="email" name="email" class="useridlogin" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required>
 
 
    
    
<label for="useridlogin" id="controllabel">* User Phone No:</label>
    <input type="text" spellcheck=false class="useridlogin" id="phoneno" pattern="^[2-9]{1}\d{9}$" name="phoneno" placeholder="Enter 10 Digit Ph No: " required>
 
<label for="useridlogin" id="controllabel">* User type</label>
<select name="usertype" form="registerform" id="usertypeselect">
  <option value="s">Student</option>
  <option value="t">Others</option>
  </select> 
<label for="useridlogin" id="controllabel">* College/ Company</label>
    <input type="text" spellcheck=false class="useridlogin" id="college" name="college" placeholder="Enter College/Company" required>
  
  

 <label for="password" id="controllabel">* Password</label>
 <input type="password" class="passwordlogin"  id="password" name="password" placeholder="Enter Password" required>
 
  <label for="password_confirmation" id="controllabel">* Confirm Password</label>
    <input type="password" class="passwordlogin"   id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required 
    
 </div>
 <br>
 <button id="subsignin" type="submit">Sign Up</button>

</form>

</div>
</body>
</html>