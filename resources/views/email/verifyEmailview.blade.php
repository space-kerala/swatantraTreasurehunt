<!DOCTYPE html>
<html>
<head>
<title>Activate Your Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signin.css">
</head>
<body>
@if(session('req_mail'))
<div class="alert alert-success">
<p>An activation Link has been sent to {{ session('req_mail')}}<a href={{route('login')}}>click here to sign in if verified</a></p>        
    </div>
@endif
</body>
</html>



















