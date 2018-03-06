<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Leaderboard;
use App\Question;
use App\User;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
	     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          $this->middleware('auth:admin');
         
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
        $usertype="s";
      	 $id=Auth::id();
      	 $totalquestion = Question::where('usertype',$usertype)->count();
       
      	 $fulldata =DB::table('leaderboards')->join('users', 'leaderboards.user_id', '=', 'users.id')->where('leaderboards.usertype',$usertype)->orderBy('leaderboards.level','desc')->orderBy('leaderboards.prevlevcompleted_at')->get();
        // dd($fulldata);
      	 return view('adminhomepage',compact('fulldata','totalquestion'));
        
          }
       
     
    

        
   
//blocking and unblocking
   public function blockunblock(Request $request)
    {
        
         $selecteduser = User::where('id',$request->id)->first();
       //  dd($selecteduser->blocked);
         if($selecteduser->blocked == false)
         {
         	User::where(['id'=> $request->id])->update(['blocked'=>'1']);
          Leaderboard::where(['user_id'=> $request->id])->update(['blocked'=>'1']);
        
        }

        elseif($selecteduser->blocked == true)
         {
         	User::where(['id'=> $request->id])->update(['blocked'=>'0']);
          Leaderboard::where(['user_id'=> $request->id])->update(['blocked'=>'0']);
        
        }
        
        
    }

    public function deleteuserfromtables(Request $request)
    {
                
         
          Leaderboard::where(['user_id'=> $request->id])->delete();
          User::where(['id'=> $request->id])->delete();
         
        

        
        
    } 

  public function addquestionview()
      {
       
         $totalquestion = Question::all()->count();
         $id=Auth::id();
        

          $status='';

          
           return view('adminaddquestionview',compact('status','totalquestion'));       
         
         
     
    }


    public function questionadd(Request $request)
      {
         $totalquestion = Question::all()->count();
         $id=Auth::id();
        
          
        $addquest = new Question;
        $addquest->questno = $request->questno;
        $addquest->quest = $request->quest;
        $addquest->usertype = $request->usertype;
        $hashans = Hash::make($request->answer);
    //    dd($hashans);
         $addquest->answer = $hashans;
                //saving
        $statusvalue= $addquest->save();
        if($statusvalue == true)
        {
          $status = "Question Added Succesfully";
        }
       else 
          {
                $status = "Error Adding Question ";

          }
  
       
          
         if($request->hasFile('imagefullname'))
         {
            $imagefullname = $request->file('imagefullname');
             $extension = $imagefullname->getClientOriginalExtension();
             if(strcmp($extension,'jpg')==0 || strcmp($extension,'png')==0 || strcmp($extension,'jpeg')==0)
              {  
             
             $imagename = $request->imagename;
             $imagefullname = $request->file('imagefullname');
             $filename = $imagename . '.' . $imagefullname->getClientOriginalExtension();
             $request->imagefullname->storeAs('public/hunt_questions',$filename);    
             
            } 
           
           else
           {
             return 'invalid format';
           }
         }     
       

          return view('adminaddquestionview',compact('status','totalquestion'));        
         
         
      
    }

//question listing and deleting route
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function questionlist()
      {
         $id=Auth::id();
         $usertype="s";
         $totalquestion = Question::where('usertype',$usertype)->count();
        

          $questdata = Question::where('usertype',$usertype)->orderBy('questno')->get();
         // dd($questdata);

           return view('questionlistview',compact('questdata','totalquestion'));
        
          
       
     
    }       

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function questiondelete(Request $request)
      {
        
         $id=Auth::id();
           $usertype="s";
         $totalquestion = Question::where('usertype',$usertype)->count();
        
                   $deletedRow = Question::where('usertype',$usertype)->where('questno',$request->questno)->delete();
                //  $questdata = Question::orderBy('questno')->get();
                //    return view('questionlistview',compact('questdata','totalquestion'));  
        
          
       
      
    } 

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function indextechie()
      {
        $usertype="t";
         $id=Auth::id();
         $totalquestion = Question::where('usertype',$usertype)->count();
       
         $fulldata =DB::table('leaderboards')->join('users', 'leaderboards.user_id', '=', 'users.id')->where('leaderboards.usertype',$usertype)->orderBy('leaderboards.level','desc')->orderBy('leaderboards.prevlevcompleted_at')->get();
        // dd($fulldata);
         return view('adminhomepage',compact('fulldata','totalquestion'));
        
          
       
    
    } 


    

//question listing and deleting route
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function questionlisttechie()
      {
         $id=Auth::id();
         $usertype ="t";
         $totalquestion = Question::where('usertype',$usertype)->count();
        

          $questdata = Question::where('usertype',$usertype)->orderBy('questno')->get();
         // dd($questdata);

           return view('questionlistviewtechie',compact('questdata','totalquestion'));
        
          
       
    
    }       

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function questiondeletetechie(Request $request)
      {
        
         $id=Auth::id();
          $usertype ="t";
         $totalquestion = Question::where('usertype',$usertype)->count();
        
                   $deletedRow = Question::where('usertype',$usertype)->where('questno',$request->questno)->delete();
                //  $questdata = Question::orderBy('questno')->get();
                //    return view('questionlistview',compact('questdata','totalquestion'));  
        
          
    
    }      




}
