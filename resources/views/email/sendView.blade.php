<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body style="background-color:#2c3d5b;">
	    <h1 style="color:white;">Hi<span style='color:red;margin-right:.2em; display:inline-block;'>&nbsp;</span>{{$user->name}}</h1>
		<h2 class="text-center" style="color:white;">Welcome to Swatantra Treasure Hunt</h2>
        <p style="color:white;font-size:18px;font-weight:bold;">To verify Email <a href ={{route('verifyEmailDone',["email" => $user->email, "verifyToken"=> $user->verifyToken])}} ><b>click here</b></a></p>
        <p style="color:white;font-size:18px;font-weight:bold;">Regards,</p>
        <p style="color:white;font-size:18px;font-weight:bold;">SwatantraHunt-Team</p>  
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>
