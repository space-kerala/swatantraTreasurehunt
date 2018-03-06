<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Leaderboard;
use App\Question;
use App\User;
use Carbon\Carbon;

class HuntController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
         
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
          $id=Auth::id();
          $usertype = Auth::user()->usertype;
          $adminoruser = User::where('id',$id)->first();
          $totalquestion = Question::where('usertype',$usertype)->count();

         if($adminoruser->blocked == true)
         {
          return view('blockeduserview')->with('totalquestion',$totalquestion);
         }
         else
        {  
            $totalatmt = Leaderboard::sum('attempts');
             $totalusrs = User::count('id');
            $noofdigusers = strlen((string)$totalusrs);
            $noofdigits = strlen((string)$totalatmt);
             $totalattempts= (string)$totalatmt;
            $totalusers= (string)$totalusrs;
           
            
    
         $currentuserdata = Leaderboard::where('user_id',$id)->first();
         $currentlevelquest = Question::where('questno',$currentuserdata->level)->where('usertype',$usertype)->first();
         return view('huntpage',compact('currentlevelquest','totalquestion','currentuserdata','noofdigits','totalattempts','noofdigusers','totalusers'));
        // return view('huntpage')->with('currentlevelquest',$currentlevelquest);
        }
         
    }

      public function leaderboard()
    {
          $usertype = Auth::user()->usertype;
          $totalquestion = Question::where('usertype',$usertype)->count();
           $id=Auth::id();
         $mycurrentlists = Leaderboard::where('blocked','=', '0')->where('usertype',$usertype)->orderBy('level','desc')->orderBy('prevlevcompleted_at')->limit(500)->get();
        
           $presentornot = $mycurrentlists->where('user_id',$id);
          if (count($presentornot)) 
          { 
            $myrank=0;
          return view('leaderboardpage',compact('mycurrentlists','totalquestion','myrank'));

         //return view('leaderboardpage')->with('mycurrentlists',$leaderboardlists);
          }
         else
         {
           
           $count = Leaderboard::where('usertype',$usertype)->count();
           $skip = 500;
           $limit = $count - $skip; // the limit
           $myrank=501;
           $listgreater = Leaderboard::where('blocked','=', '0')->where('usertype',$usertype)->orderBy('level','desc')->orderBy('prevlevcompleted_at')->skip($skip)->take($limit)->get();
           foreach($listgreater as $rankcheckuser)
           {
            if($rankcheckuser->user_id == $id)
             {
              
              break;  
             }
             else
             {
                $myrank =$myrank + 1;
             }
           }

           return view('leaderboardpage',compact('mycurrentlists','totalquestion','myrank'));



         } 
    }
  

      public function answerchecking(Request $request)
    {
          $usertype = Auth::user()->usertype;
          $id=Auth::id();
          Leaderboard::where('user_id',$id)->increment('attempts');
          $currentuserdata = Leaderboard::where('user_id',$id)->first();
          $currentlevelquest = Question::where('questno',$currentuserdata->level)->where('usertype',$usertype)->first();
         // $lowercaseanswer =strtolower($currentlevelquest->answer);
          $lowercaseuseranswer =strtolower($request->answer);
          $lowercaseuseranswer = preg_replace('/\s+/', '', $lowercaseuseranswer);
          $lowercaseuseranswer= preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $lowercaseuseranswer);
       //    date_default_timezone_set('Asia/Kolkata');
             $mytime = Carbon::now();
           //  dd($lowercaseuseranswer);

          if(Hash::check($lowercaseuseranswer,$currentlevelquest->answer))
          {

            date_default_timezone_set('Asia/Kolkata');
             $mytime = Carbon::now();
            //dd($mytime);
            Leaderboard::where('user_id',$id)->increment('level');

             Leaderboard::where('user_id',$id)->update(['prevlevcompleted_at'=> $mytime]);
             $numbers= range(1,51);
             shuffle($numbers);
             $unknown =rand(0,50);
            $imgno =$numbers[$unknown];
             return view("correctansview")->with('imgno',$imgno);
            
          }
          else
          {
         $numbers= range(1,90);
          shuffle($numbers);
          $unknown =rand(0,89);
          $imgno =$numbers[$unknown];         

            return view("wrongansview")->with('imgno',$imgno);

          }

    }

    //functions for ajax returns user count and total attempts
       public function takeattempts()
    {
     
    $totalatmt = Leaderboard::sum('attempts');
   // $totalusrs = Leaderboard::count('id');
  //  $noofdigusers = strlen((string)$totalusrs);

    $noofdigits = strlen((string)$totalatmt);
    $totalattempts= (string)$totalatmt;
   //  $totalusers= (string)$totalusrs;

    return $totalattempts; 

    } 

    public function takeusrcnt()
    {
    
  
   $totalusrs = User::count('id');
   $totalusers= (string)$totalusrs;

    return $totalusers; 

    }     

     public function aboutpg()
    {
      return view("aboutswatantrapage");
    } 
  
  public function winnerpg()
    {
      return view("winnerspage");
    } 
  
}
