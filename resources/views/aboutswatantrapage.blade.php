<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
     
        <title>Swatantra 2017</title>
        

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
         <link href="{{ URL::asset('css/navigationbar.css') }}" rel="stylesheet"> 
		<link href="{{ URL::asset('css/aboutpage.css') }}" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="mainbody">
		  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="topcontainer">
        
        <div class="container-fluid" id="test">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}" id="glyphy"><span  class="glyphicon glyphicon-road"></span></a>
                <a class="navbar-brand" href="{{ route('leaderboard') }}" id="glyphy"><span  class="glyphicon glyphicon-king"></span></a>
               
                 <a class="navbar-brand" href="{{ route('aboutpage') }}" id="glyphy"><span  class="glyphicon glyphicon-paperclip"></span></a>
            </div> 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
           
                 
                 
               
           <!--         <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
                
              <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                   <a id="namebutton" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative;"><img src="/storage/profile_avatars/{{ Auth::user()->profile_avatar }}" style="width:20px;height:20px; position:absoulte; border-radius:50%;">
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                   <li><a id="profilebutton" href="{{ route('profile') }}">Profile</a></li>
                                    <li>
                                        <a id="logoutbutton" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>  
              
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container --> 
    </nav>
  <div id="fullcontainer">  
 <img id="logo2" src = "/storage/logos/2.png">
<p id="para1"><b>ICFOSS</b> in association with <b>SPACE</b> is organising a <b>triennial conference- <span>'Swatantra 2017'</span></b>, during <b>20th</b> and <b>21st December 2017</b> at<b> Mascot Hotel</b>, Thiruvananthapuram, Kerala. as was done in the previous years 2001, 2005, 2008, 2011 and 2014. The theme of Swatantra 2017 is :<b> FOSS for Sustainable Development (Communities, Culture, Governance & Technologies)</b></p>

<p id="para2"><b>Swatantra 2017</b> with its theme as above will be the forum for sharing experiences across communities and brainstorm on the ways forward for <b>FOSS</b> to be the technology enabler in meeting sustainability goals. The event will comprise of plenary talks, tracks on -’<b>FOSS in Governance, Community & Culture and Technology</b>’, workshops, exhibitions on available FOSS solutions and innovations. It will be interesting to note that some of the sessions for the event shall be aligned to the missions of Kerala Government, aimed at sustainable development.</p>

<p id="para3">About 250-300 <b>Free Software enthusiasts</b>, including practitioners, developers, researchers, academics, students, as well as representatives from civil society institutions, industry and the Government are expected to participate in the two-day Conference. Several luminaries from the<b> FOSS</b> world from outside the country and within are also expected to take part.</p>

</div>
  

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>





</body>
</html>

