<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Leaderboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use App\Http\Controllers\Auth\Session;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verifyEmailFirst';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
       $gmail="gmail.com";
        $googlemail="googlemail.com";
        $usergivenemail = $data['email'];
        $usergivenemail = strtolower($usergivenemail);
        $parts = explode("@", $usergivenemail);
        $domainname = $parts[1];
      if( (strcmp($domainname, $gmail) == 0 ) || (strcmp($domainname, $googlemail) == 0) )  
       { 
         
          $username = $parts[0];
         $usrnameplusbugfix = explode("+", $username);
        $usrnamenoplusnoperiod = preg_replace('/[.]/', '', $usrnameplusbugfix[0]);
        $emailfixed = $usrnamenoplusnoperiod . '@' . $gmail ;
        $data['email'] = $emailfixed; 
       
       }   

       return Validator::make($data, [
            'name' => 'required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|alpha_num|confirmed',
            'usertype' =>'required',
            'college' =>'required|string|regex:/^[\pL\s\-]+$/u', 
            'phoneno' => 'required|digits:10|unique:users'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   protected function create(array $data)
    {
        $gmail="gmail.com";
        $googlemail="googlemail.com";
        $usergivenemail = $data['email'];
        $usergivenemail = strtolower($usergivenemail);
        $parts = explode("@", $usergivenemail);
        $domainname = $parts[1];
      if( (strcmp($domainname, $gmail) == 0 ) || (strcmp($domainname, $googlemail) == 0) )  
       { 
         
          $username = $parts[0];
         $usrnameplusbugfix = explode("+", $username);
        $usrnamenoplusnoperiod = preg_replace('/[.]/', '', $usrnameplusbugfix[0]);
        $emailfixed = $usrnamenoplusnoperiod . '@' . $gmail ;
        $data['email'] = $emailfixed; 
       
       }   

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'usertype' =>$data['usertype'],
            'college' =>$data['college'],
            'phoneno' => $data['phoneno'],
            'verifyToken' => Str::random(40),
        ]);
        $thisUser=User::findorFail($user->id);
      $req_mail= $data['email'];
        session(['req_mail' => $req_mail]);
        $this->sendEmail($thisUser);
        return $user;
    }   
   public function verifyEmailFirst()
    {
        
        return view('email.verifyEmailview');
    }
     public function sendEmail($thisUser)
    {
       
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
        
    
  //    $emails = ['sajras1992@gmail.com', 'jithinthankachan2600@gmail.com','sumandev.p@gmail.com'];
  //    $new = "New User";
   //   $reg =  " Registered";
//$content = $new .' '. $thisUser->name . ' '. $reg ;
  //   Mail::send('email.newuserreg', [], function($message) use ($emails,$content)
//{    

 //   $message->to($emails)->subject($content);    
//});
//var_dump( Mail:: failures());


 }
    public function verifyEmailDone($email,$verifyToken)
    {
        

        $user = User::where(['email'=> $email,'verifyToken'=>$verifyToken])->first();
        if($user)
        {
           User::where(['email'=> $email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
            $lowercaseadmoruseremail =strtolower($user->email);
           // dd($lowercaseadmoruseremail);
             $adminemail='swatantrahuntadm@yahoo.com';
             if(strcmp($lowercaseadmoruseremail, $adminemail) == 0)
            {
                
           return redirect('login')->with('statustrue', 'Email verified successfully');
            }
            else
            { 
            date_default_timezone_set('Asia/Kolkata');
            $mytime = Carbon::now();
            $leaderboardentry = new LeaderBoard;
            $leaderboardentry->user_id = $user->id;
            $leaderboardentry->name = $user->name;
            $leaderboardentry->usertype = $user->usertype;
            $leaderboardentry->college = $user->college;
            $leaderboardentry->profile_avatar = $user->profile_avatar;
             $leaderboardentry->attempts = 0;
            $leaderboardentry->prevlevcompleted_at = $mytime;
            $leaderboardentry->save();

           return redirect('login')->with('statustrue', 'Email verified successfully');
            }
        }    
        else
        {
             $checkuser = User::where(['email'=> $email,'status'=> '1'])->first();
             if($checkuser)
             {
                     
                return redirect('login')->with('statusalready', 'Email Already verfied please login to continue');
             }
             else
             {
              return redirect('login')->with('statusfalse', 'Email verification expired please sign up again');  
             }
         }    
    }

}
