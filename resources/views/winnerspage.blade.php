<<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Winners</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ URL::asset('css/navigationbar.css') }}" rel="stylesheet"> 
		<link href="{{ URL::asset('css/winners.css') }}" rel="stylesheet">
     <link href="{{ URL::asset('css/custommodal.css') }}" rel="stylesheet"> 

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
               
                  <a class="navbar-brand" href="{{ route('winnerspage') }}" id="glyphy"><span  class="glyphicon glyphicon-education"></span></a>
                
              
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
         </div>
         </nav>

 

 <br> 
<br>
    <div class="container-fluid" id="topmostcontainer">
    <div class="container" id="topcontainer">
  <div class="row" id="contactlisttable">
      <div class="panel panel-def Contactault" id="toplevel">
        <div class="panel-heading">
    <br>
    <br>         
  
        <table class="table table-fixed table-hover" >
          <thead>
            <tr>
              <th class="text-center col-xs-offset-5 col-xs-3 col-sm-offset-5 col-sm-3 col-md-offset-5 col-md-3 col-lg-offset-5 col-lg-3" id= "formobilehead" >WINNERS</th>
           </tr>
          </thead>
           <tbody>
         
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">STUDENTS 1st PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">STUDENTS 2nd PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">STUDENTS 3rd PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
          
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">Techie/Others 1st PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">Techie/Others 2nd PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">Techie/Others 3rd PRIZE:</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>



         </tbody>



        </table>
      

         <table class="table table-fixed table-hover" >
          <thead>
            <tr>
              <th style="position:relative;left:-5%;" class="text-center col-xs-offset-5 col-xs-4 col-sm-offset-5 col-sm-4 col-md-offset-5 col-md-4 col-lg-offset-5 col-lg-4" id= "formobilehead" >BREAK POINT WINNERS</th>
           </tr>
          </thead>
           <tbody>
         
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">BREAK POINT 1</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">----------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">-----------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">BREAK POINT 2</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">----------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
                  
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">BREAK POINT 3</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">---------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">----------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">BREAK POINT 4</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">----------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-5 col-sm-5 col-md-5 col-lg-5" id="currentname">BREAK POINT 5</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>



         </tbody>


         
        </table>
      

         <table class="table table-fixed table-hover" >
          <thead>
            <tr>
              <th class="text-center col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4" id= "formobilehead" > BEST PERFORMERS</th>
           </tr>
          </thead>
           <tbody>
         
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">1</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">2</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
                  
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">3</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">4</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">4</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
        
          <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">6</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">7</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
                  
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">8</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">9</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">10</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

            <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">11</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">12</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
                  
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">13</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">14</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">15</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

            <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">16</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">17</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

         
                  
         <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">18</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>
          
           <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">19</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>

             <tr class="currentrowcontact" id="rowelement"> 
         <td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="currentname">20</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id="college">------------</td><td class="text-center col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "formobilehead">------------</td> 
         
          </tr>


         </tbody>


         
        </table>




      </div>
  </div>
</div>
<br>
<br>
</div>








      

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>




	</body>
</html>