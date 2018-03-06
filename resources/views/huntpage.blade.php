<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
         @if($currentuserdata->level <= $totalquestion)
		<title>Level-{{$currentlevelquest->questno}}</title>
        @else
        <title>Levels Completed</title>
        @endif

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
         <link href="{{ URL::asset('css/navigationbar.css') }}" rel="stylesheet"> 
		<link href="{{ URL::asset('css/huntpage.css') }}" rel="stylesheet">

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
                <a class="navbar-brand" href="#" id="glyphy" data-toggle="modal" data-target="#rules_modal"><span  class="glyphicon glyphicon-registration-mark"></span></a>

                  <a class="navbar-brand" href="{{ route('winnerspage') }}" id="glyphy"><span  class="glyphicon glyphicon-education"></span></a>

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
   <!-- /user and attempts count board --> 
<div class="hangingbox" id="board">

<div class="cards-container">
  @for($i=0; $i < $noofdigusers; $i++)
    <div class="card">
      <div class="eachcardfront">
        <span id="cardusr<?PHP echo $i; ?>" class="fontclasscard">{{$totalusers[$i]}}</span>
      </div>
      <div class="eachcardback">
        <span></span>
      </div>
    </div>
   @endfor
  
  </div>  

 @include('cardletter');
    
  <div class="cards-container attemptscards">
  @for($i=0; $i < $noofdigits; $i++)
    <div class="card attcard">
      <div class="eachcardfront">
        <span id="cardelement<?PHP echo $i; ?>" class="fontclasscard" >{{$totalattempts[$i]}}</span>
      </div>
      <div class="eachcardback">
        <span></span>
      </div>
    </div>
   @endfor

  </div>
  @include('cardhunt');

</div>
   


     @if($currentuserdata->level <= $totalquestion)
    <div  class="container" id="levelbox">
     <span id ="levelteller">LEVEL:</span><span id="levelteller">{{$currentlevelquest->questno}}</span>
     @else
     <div  class="container" id="levelboxcompleted">
     <span id ="leveltellercompleted">PLease wait for the new levels </span>
     @endif     


   </div>
    @if($currentuserdata->level <= $totalquestion)
    <div  class="container" id="questionbox">

        
     <?php echo $currentlevelquest->quest;  ?>

  </div>
  <div class="container" id="answerbox">
    <form action="{{ route('anscheck') }}" method="POST">
   
     
    <input type="text" spellcheck=false class="useridlogin" id="answertextbx" name="answer" placeholder="Enter Your Answer" required>
        
        <input type="submit" id="subbutton" value="Submit" class="btn btn-sm btn-primary">
        {{csrf_field()}} 
        </form>
</div>
    @else

    <div  class="container" id="questionboxcompleted">

        
     <div><p><b>Great ... Please Wait till admin upload new questions.<b></b></div>

  </div>

    @endif
  <img  id="logoswat" src = "/storage/logos/logoswat.png"> 


<!-- Modal -->
<div id="rules_modal" class="modal fade move-horizontal" role="dialog">
  <div class="modal-dialog" style="transition:none;">

    <!-- Modal content-->
    <div class="modal-content" style="background:rgba(0,0,0,.7);">
      <div class="modal-header" style="text-align:center;border-bottom: 1px solid #4d4d4d;color:white">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4  class="modal-title">Rules</h4>
      </div>
      <div class="modal-body" style="color:white">

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Notes</p>
 <p style="margin:0px;">Game progress in seperate path for Students and Techie/Others.There will be winners from both user sections.</p>
      <p style="margin:0px;">-You are a <span style="font-size:15px;margin-right:4px;">@if(strcmp(Auth::user()->usertype,"s")==0)<?php echo('student');?>@else <?php echo('others');?>@endif</span>User.</p>
       <p style="margin:0px;">only<span style="font-size:15px;margin-right:4px;margin-left:4px">@if(strcmp(Auth::user()->usertype,"s")==0)<?php echo('student');?>@else <?php echo('techies/others');?>@endif</span> leaderboard/Questions will be accessible for you.</p>
<p style="font-weight:bold;text-decoration:underline;margin:0px;">Question & Answering</p>


<p style="margin:0px;">-The Treasure Hunt has Maximum 40 Level in which each Level consist of 1 Question.</p>
<p style="margin:0px;">-The Treasure Hunt for <span style="font-size:15px;margin-right:2px;">@if(strcmp(Auth::user()->usertype,"s")==0)<?php echo('student');?>@else <?php echo('others');?>@endif</span> has currently <span style="font-size:18px;margin-right:2px;">{{$totalquestion}}</span>questions.</p>
<p style="margin:0px;">-Admin will add Questions throughtout the progress of the Game.</p>
<p style="margin:0px;">-Answers are not Case-Sensitive and nor space-Sensitive and answer does not contain special characters like % , - , . etc..</p>
<p style="margin:0px;">for eg: if your answer is 'superman'</p>
<p>You can answer in anycase u want. like 'Superman' or 'SUPERMAN' or 'sUPeRMaN'  or 'super man'. </p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">LeaderBoard</p>
<p style="margin:0px;">-The Leaderboard shows top 500 Players current position and last level completion time with date.Every Player can view thier Rank at top of the Leaderboard.</p>
<p>-Ranking of Players in same Level are time dependant, ie PLayer who complete that level first will be top among them.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Prizes for students Player section</p>
<p style="font-weight:bold;margin:0px;">-First Prize  : Rs 30000</p>
<p style="font-weight:bold;margin:0px;">-Second Prize : Rs 15000 </p>
<p style="font-weight:bold">-Third Prize  : Rs  5000 </p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Prizes for techie/other Player section</p>
<p style="font-weight:bold;margin:0px;">-First Prize  : Rs 30000</p>
<p style="font-weight:bold;margin:0px;">-Second Prize : Rs 15000 </p>
<p style="font-weight:bold">-Third Prize  : Rs  5000 </p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Other Special Prizes</p>
<p style="font-weight:bold;margin:0px;">-Special gifts will be given to players who reveal the Break Point Questions first</p>
<p style="font-weight:bold;">-Gifts will be given to 10 players from Each User Section based on thier Performance.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Closing Date and Time for Students section( time in Indian standard time)</p>
<p style="font-weight:bold;margin:0px;">-First Prize Question Release Time : 26th November(sunday) 2 pm</p>
<p style="font-weight:bold;margin:0px;">-First Prize Prize Declaration Time : 26th Novemeber(sunday 11.30 pm </p>
<p style="font-weight:bold;margin:0px;">-Second Prize Question Release Time : 27th November(monday) 2 pm</p>
<p style="font-weight:bold;margin:0px;">-Second Prize Prize Declaration Time : 27th November(monday) 11.30 pm </p>
<p style="font-weight:bold;margin:0px;">-Third Prize Question Release Time : 28th November(tuesday) 2 pm</p>
<p style="font-weight:bold;margin:0px;">-Third Prize Prize Declaration Time : 28th November(tuesday) 11.30 pm</p>
<p style="font-weight:bold;margin:0px;">-The moment the First Prize winner is declared, the First Prize Question's Answer will be revealed(given) through telegram group and facebook page</p>
<p style="font-weight:bold;margin:0px;">-The moment the Second Prize winner is declared, the Second Prize Question's Answer will be revealed(given) through telegram group and facebook page</p>
<p style="font-weight:bold;">-First,second and Third Prize Question's clue Timing will be made available in telegram group and faebook page</p>
<p style="font-weight:bold;">-NB : If no one breaks the perticular Prize Question  within the declaration time declaration will be extended to nextday morning 11.am</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Closing Date and Time for Techie/Other section( time in Indian standard time)</p>
<p style="font-weight:bold;margin:0px;">-First Prize Question Release Time : 28th November(Tuesday) 8 pm</p>
<p style="font-weight:bold;margin:0px;">-First Prize Prize Declaration Time : 29th Novemeber(Wednesday) 9 pm </p>
<p style="font-weight:bold;margin:0px;">-Second Prize Question Release Time : 29th November(Wednesday) 10 pm</p>
<p style="font-weight:bold;margin:0px;">-Second Prize Prize Declaration Time : 30th November(Thursday) 9 pm </p>
<p style="font-weight:bold;margin:0px;">-Third Prize Question Release Time : 30th November(Thursday) 10 pm</p>
<p style="font-weight:bold;margin:0px;">-Third Prize Prize Declaration Time : 1st December(Friday) 9 pm</p>
<p style="font-weight:bold;margin:0px;">-The moment the First Prize winner is declared, the First Prize Question's Answer will be revealed(given) through telegram group and facebook page</p>
<p style="font-weight:bold;margin:0px;">-The moment the Second Prize winner is declared, the Second Prize Question's Answer will be revealed(given) through telegram group and facebook page</p>
<p style="font-weight:bold;margin:0px;">-First,second and Third Prize Question's clue Timing will be made available in telegram group and faebook page</p>
<p style="font-weight:bold;">-NB :The Player who tops the leaderboard will be winner if no one breaks the first prize question.</p>




<p style="font-weight:bold;text-decoration:underline;margin:0px;">Clues & Hints</p>
<p style="margin:0px;">-Clues will be available in the Swatantra Hunt Telegram Group <a href="https://t.me/swatantra_treasurehunt" target="_blank">Swatantra Hunt Telegram</a>(Recommended) and SwatantraHunt Facebook page <a href="https://www.facebook.com/pg/swatantra.treasurehunt/posts/" target="_blank"> Swatantra Hunt Fb</a>.</p>
<p>-Frequency of clues will depend on the difficulty of each Level.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Admin Rights</p>
<p style="margin:0px;">-Anyone who attempts malpractices like hacking will be blocked at once. </p>
<p style="margin:0px;" >-Student section winners need to produce their valid institute id card copy when admin ask for the same.Otherwise their prize will be cancelled.</p>
<p style="margin:0px;">-Only 1 account per Person is allowed.Any such malpractises could even lead to prize cancellation for the Player.Also Employees associated with ICFOSS and SPACE are not eligible to participate.</p>
<p style="margin:0px;">-Admin Rights are not limited to these and Admin decisions are Final.</p>
<p style="margin:0px;">more detailed information will be provided after the treasurehunt end date</p>
<p style="margin:0px;">-For any technical issues contact sajras1992@gmail.com or jithin@space-kerala.org</p>










      </div>
    </div>
  </div>
</div>


 






  

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script type="text/javascript">
        callServer();

function callServer()
{
    setInterval(function(){

     $.ajax({
    url:"{{ route('takedata') }}",
    type: 'post',
    data: {_method:'get','_token':$('input[name=_token]').val()},
    success: function(data){ 
   
    var dtlength =data.length;
  

for (i = 0; i < dtlength; i++) { 
     $("#cardelement"+i).html(data[i]);
     $("#cardelement"+i).load(location.href + ' #cardelement'+i);
  }  




}
     
     });
    
      $.ajax({
    url:"{{ route('takeusercount') }}",
    type: 'post',
    data: {_method:'get','_token':$('input[name=_token]').val()},
    success: function(data){ 

    
    var dtlength =data.length;
  

for (i = 0; i < dtlength; i++) { 
     $("#cardusr"+i).html(data[i]);
     $("#cardusr"+i).load(location.href + ' #cardusr'+i);
  }  




}
     
     });
    




        
    },3000);
}



    </script>




</body>
</html>

