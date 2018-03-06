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

      

        <a  class="loginbuttonwel" href="{{ route('login') }}" style="color:white;text-decoration:none;" id="buttontext"><b>Sign In</b></a>
        <a class="registerbuttonwel" href="{{ route('register') }}" style="color:white;text-decoration:none;" id="buttontext"><b>Sign Up</b></a></span>
      <div id="welcomefooter">
      <img  id="logo1" src = "/storage/logos/1.png">  
       <img id="logo2" src = "/storage/logos/2.png"> 
        <img id="logo3" src = "/storage/logos/3.png">
      </div>  
      <span id="recommendedbrowser">
     we Recommend Firefox(version>=52), Chrome, Chromium for proper css rendering.To update firefox in debian <a  style="color:black;font-size:15px;" id="mzlink" href="https://mozilla.debian.net/" >click here</a>
      </span>

      <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
      
    setTimeout(fade_out, 4000);

function fade_out() {
  $("#recommendedbrowser").fadeOut().empty();
}


    </script>
  
  </body>
</html>