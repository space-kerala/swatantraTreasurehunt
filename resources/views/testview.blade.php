<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ URL::asset('css/testing.css') }}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
          
<div class="hangingbox">

<div class="cards-container">
  @for($i=0; $i < $noofdigusers; $i++)
  	<div class="card">
  		<div class="eachcardfront">
  			<span style="font-size:25px;font-weight:bold;">{{$totalusers[$i]}}</span>
  		</div>
   		<div class="eachcardback">
  			<span></span>
  		</div>
    </div>
   @endfor
   <span style="display:block;font-size:25px;font-weight:bold;">Users</span>
  </div> 		 

		
  <div class="cards-container">
  @for($i=0; $i < $noofdigits; $i++)
  	<div class="card">
  		<div class="eachcardfront">
  			<span style="font-size:25px;font-weight:bold;">{{$totalattempts[$i]}}</span>
  		</div>
   		<div class="eachcardback">
  			<span></span>
  		</div>
    </div>
   @endfor
 <span style="display:block;font-size:25px;font-weight:bold;">Attempts</span>
  </div>

</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>