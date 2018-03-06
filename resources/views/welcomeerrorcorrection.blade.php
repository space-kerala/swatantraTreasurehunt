<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Swatantra Hunt</title>

       
        <link rel="stylesheet" href="css/welcome.css">
    </head>
  <body>

       <div class="loader">
       <h1>Swatantra</h1>
       </div>
       <div class="hunt">
       <h2>
           <span>T</span>
           <span>R</span>
           <span>E</span>
           <span>A</span>
           <span>S</span>
           <span>U</span>
           <span>R</span>
           <span>E</span>
           <span id="space"> </span>
           <span>H</span>
           <span>U</span>
           <span>N</span>
           <span>T</span>
       </h2>
       </div>
       <a  class="loginbuttonwel" href="{{ route('login') }}" style="display:none;color:white;text-decoration:none;" id="buttontext"><b>Sign In</b></a>
       <a class="registerbuttonwel" href="{{ route('register') }}" style="display:none;color:white;text-decoration:none;" id="buttontext"><b>Sign Up</b></a></span>
        <script> setTimeout(function(){window.location='/welcome'}, 200); </script>
        
  </body>
</html>
