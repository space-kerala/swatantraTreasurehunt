<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Leaderboard;
use App\Question;




class ProfileController extends Controller
{


	  public function __construct()
    {
        $this->middleware('auth');
         
    }

    public function index()
    {
      
          $totalquestion = Question::all()->count();     
         $user = Auth::user();
        return view('profile',compact('user','totalquestion'));
     
    }
    
    public function updateavatar(Request $request)
    {
       $totalquestion = Question::all()->count();
     
      if($request->hasFile('profile_avatar'))
      {
 
      	$profile_avatar = $request->file('profile_avatar');
        $extension = $profile_avatar->getClientOriginalExtension();
        $extension = strtolower($extension);
        if(strcmp($extension,'jpg')==0 || strcmp($extension,'png')==0 || strcmp($extension,'jpeg')==0)
        {  
          
      	$filename =time() . '.' . $profile_avatar->getClientOriginalExtension();
        $request->profile_avatar->storeAs('public/profile_avatars',$filename);    
      	$user = Auth::user();
        $userleaderboard = Leaderboard::where('user_id',$user->id)->first();
      	$user->profile_avatar = $filename;
      	$user->save();
        $userleaderboard->profile_avatar = $filename;
        $userleaderboard->save();
        }
        else
        {
          return 'invalid file type';
        }
      } 
         $user = Auth::user(); 
       return view('profile',compact('user','totalquestion'));
         
    }



}
