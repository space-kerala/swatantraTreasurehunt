<<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Leaderboard</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
     <link href="{{ URL::asset('css/navigationbar.css') }}" rel="stylesheet"> 
		<link href="{{ URL::asset('css/leaderboard.css') }}" rel="stylesheet">
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
                  
                <a class="navbar-brand" href="#" id="glyphy" data-toggle="modal" data-target="#rules_modal" ><span  class="glyphicon glyphicon-registration-mark"></span></a>

              
               <span class ="navbar-brand " id ="displaymyrank"></span>
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
              <th class="text-center col-xs-offset-1 col-xs-2 col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2 col-lg-offset-1 col-lg-2" id= "formobilehead" >RANK</th><th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobilehead">NAME</th><th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id= "formobileheadcollege">INSTITUTE</th><th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" id= "formobilehead">LEVEL</th><th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobileheadtime">PREV LEVEL FINISH TIME</th>
           </tr>
          </thead>
           <tbody>
          @if(count($mycurrentlists))
           @foreach($mycurrentlists as $eachuser)
         <tr class="currentrowcontact" id="rowelement" data-toggle="modal" data-target="#PreviewModal"> 
          <td class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1"><span><img src="/storage/profile_avatars/{{ $eachuser->profile_avatar }}" style="width:20px;height:20px;border-radius:50%;"></span></td><td class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id="currentposition">{{$loop->iteration}}</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id="currentname"><?php echo($eachusrclg = (strlen($eachuser->name) > 15) ? substr($eachuser->name,0, 13).'..' : $eachuser->name); ?></td><td class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2" id="college"> <?php echo($eachusrclg = (strlen($eachuser->college) > 10) ? substr($eachuser->college,0,8).'...' : $eachuser->college); ?> </td><td class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1" id="currentlevel">{{$eachuser->level}}</td><td class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3" id= "formobilehead">{{$eachuser->prevlevcompleted_at}}</td> 
          <input type="hidden" id="currentid" value="{{$eachuser->user_id}}">
          <input type="hidden" id="photo" value="{{$eachuser->profile_avatar}}">
             <input type="hidden" id="currentfullname" value= "{{$eachuser->name}}">
            <input type="hidden" id="currentfullcollegename" value= "{{$eachuser->college}}">
            @if(Auth::user()->id == $eachuser->user_id)
            <input type="hidden" id="myrank" value="{{$loop->iteration}}">
            @endif
          </tr>
           @endforeach 
           @endif    
          </tbody>
        </table>
      
      </div>
  </div>
</div>
<br>
<br>
</div>

<!-- Modal -->
<div class="modal fade" id="PreviewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog mymodal" role="document">
        <div class="modal-content" id="modaldesign">
      <div class="modal-header" id="mheader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
    
      <div class="modal-body" >
      <div class="container-fluid" id="mbody">

       <input type="hidden" id="elementid">
       <div class="row">
           <div class="col-lg-offset-4 col-lg-4">
               <div class="well col-lg-offset-2 col-lg-10">
                   <a href="#" id="pop" data-toggle="" data-target="#">
                       <img id="imageresource" src="">
                   </a>
                   
                   
           </div>
           </div>
           </div>

              <p id ="labelmp" style="text-align:center;font-weight:bold;">Rank:<span id="inputR" style="margin-left:1px;"></span></p>
              <p id ="labelmp" style="text-align:center;font-weight:bold;">Name:<span id="inputN" style="margin-left:1px;"></span></p>
               <p id ="labelmp" style="text-align:center;font-weight:bold;">Institute:<span id="inputC" style="margin-left:1px;"></span></p>
 
          
      </div>
    </div>
    </div>
  </div>
</div> 






<!--RULE  Modal -->
<div id="rules_modal" class="modal fade move-horizontal" role="dialog">
  <div class="modal-dialog" id="rulemodaldial" style="transition:none;">

    <!-- Modal content-->
    <div class="modal-content" style="background:rgba(0,0,0,.5)">
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


<p style="margin:0px;">-The Treasure Hunt has total 40 Level in which each Level consist of 1 Question.</p>
<p style="margin:0px;">-The Treasure Hunt for <span style="font-size:15px;margin-right:2px;">@if(strcmp(Auth::user()->usertype,"s")==0)<?php echo('student');?>@else <?php echo('others');?>@endif</span> has currently <span style="font-size:18px;margin-right:2px;">{{$totalquestion}}</span>questions.</p>
<p style="margin:0px;">-Admin will add Questions throughtout the progress of the Game.</p>
<p style="margin:0px;">-Answers are not Case-Sensitive and nor space-Sensitive.</p>
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
<p style="font-weight:bold;margin:0px;">-First Prize  : will be anounced later</p>
<p style="font-weight:bold;margin:0px;">-Second Prize : will be anounced later</p>
<p style="font-weight:bold">-Third Prize  : will be anounced later</p>
<p style="font-weight:bold;text-decoration:underline;margin:0px;">Deciding Winner</p>
<p style="margin:0px;">-The Player who top the leaderboard at the closing Date will be  declared the winner,ie Player who comes Rank 1 in Leaderboard on closing date.</p>
<p>-Closing Date  : will be anounced later.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Deciding Runner Up & Second Runner Up</p>
<p>-As Soon as the first prize winner is declared,his level number will be taken as a reference.let it be x. All players except winner have to go through <span style="font-size:18px; font-weight:bold;">2</span> extra levels apart from the x Levels to compete for the second and third Prize.Top 2 players from that x+2 levels will be declared the first and second Runner up Respectively.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Clues & Hints</p>
<p style="margin:0px;">-Clues will be available in the Swatantra Hunt Telegram Group <a href="https://t.me/swatantra_treasurehunt" target="_blank">Swatantra Hunt Telegram</a>(Recommended) and SwatantraHunt Facebook page <a href="https://www.facebook.com/pg/swatantra.treasurehunt/posts/" target="_blank"> Swatantra Hunt Fb</a>.</p>
<p>-Frequency of clues will depend on the difficulty of each Level.</p>

<p style="font-weight:bold;text-decoration:underline;margin:0px;">Admin Rights</p>
<p style="margin:0px;">-Anyone who attempts malpractices like hacking will be blocked at once. </p>
<p style="margin:0px;" >-Student section winners need to produce their valid institute id card copy when admin ask for the same.Otherwise their prize will be cancelled.</p>
<p style="margin:0px;">-Only 1 account per Person is allowed.Any such malpractises could even lead to prize cancellation for the Player.</p>
<p style="margin:0px;">-Admin Rights are not limited to these and Admin decisions are Final.</p>
<p style="margin:0px;">-For any technical issues contact sajras1992@gmail.com or jithin@space-kerala.org</p>



      </div>
    </div>
  </div>
</div>

 <span id="clickrow">Click Player row to get detailed view of the Player,Use Profile Page to change your Profile Picture</span>

      

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- UserdDefined  scripts   -->

<script>
$(document).ready(function(){

$(document).on('click','.currentrowcontact',function(event){

var id = $(this).find('#currentid').val();
var filename = $(this).find('#photo').val();

var rank = $(this).find('#currentposition').text();
var name = $(this).find('#currentfullname').val();
var college = $(this).find('#currentfullcollegename').val();

$('#inputR').text(rank);
$('#inputN').text(name);
$('#inputC').text(college);
$('#elementid').val(id);
var folder ='/storage/profile_avatars/';
var imgpath = folder.concat(filename);
$('#imageresource').attr('src',imgpath);

});

var myrankelement = document.getElementById("myrank");


if(myrankelement != null) 
    {
      var myrank = myrankelement.value;
      $('#displaymyrank').html('Rank: '+ myrank);
    }
else
     {
   //   $('#displaymyrank').html('Rank: '+ "99567865" ); 
       $('#displaymyrank').html('Rank: '+ "<?php echo($myrank); ?>" );        
     }
}); 
</script>

 <script type="text/javascript">
      
    setTimeout(fade_out, 4000);

function fade_out() {
  $("#clickrow").fadeOut().empty();
}
</script>
	</body>
</html>