<?php
use App\Contact;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!9
|
*/
//Auth routes
Auth::routes();

//verify email routes
Route::get('/verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('/verify/{email}/{verifyToken}','Auth\RegisterController@verifyEmailDone')->name('verifyEmailDone');

//welcome routes
Route::get('/symlinkcreate','HomeController@createsymlink')->name('createsymlink');

//welcome routes
Route::get('/welcome','HomeController@index')->name('welcome');

//home route
 Route::get('/home','HuntController@index')->name('home'); 

//answerchecking route
 Route::post('/home','HuntController@answerchecking')->name('anscheck'); 

//leaderboard route
 Route::get('/leaderboard','HuntController@leaderboard')->name('leaderboard'); 





//profile route
Route::get('/profile','ProfileController@index')->name('profile');
Route::post('/profile','ProfileController@updateavatar')->name('updatepropic'); 

//towelcomeredirect
Route::get('/','HomeController@welcomeredirect')->name('welredirect');

//takingdatafor attempts change without reload
Route::get('/takedata','HuntController@takeattempts')->name('takedata'); 

//takingdatafor usercount change without reload
Route::get('/takeusercount','HuntController@takeusrcnt')->name('takeusercount'); 


//Winners Tab
Route::get('/Winners','HuntController@winnerpg')->name('winnerspage');

//about page route
Route::get('/About','HuntController@aboutpg')->name('aboutpage'); 



//ADMIN ROUTES


//adminstudent routes
 Route::get('/adminhome','AdminController@index')->name('adminhomepage'); 

//adminquestionadd routes
 Route::get('/addquest','AdminController@addquestionview')->name('adminaddquestion'); 
 Route::post('/addquest','AdminController@questionadd')->name('addquestion'); 


//question list and delete routes
 Route::get('/questionlist','AdminController@questionlist')->name('questionlist'); 
 Route::delete('/questionlist','AdminController@questiondelete')->name('questiondelete'); 


//admintechie routes
 
 Route::get('/admintechiehome','AdminController@indextechie')->name('adminhomepagetechie'); 


//question list and delete routes
 Route::get('/questionlisttechie','AdminController@questionlisttechie')->name('questionlisttechie'); 
 Route::delete('/questionlisttechie','AdminController@questiondeletetechie')->name('questiondeletetechie'); 


//Blocking and Unblocking Routes
Route::delete('/adminhome','AdminController@blockunblock')->name('blockunblock');

//Blocking and Unblocking Routes
Route::post('/adminhome','AdminController@deleteuserfromtables')->name('deleteuser');



//multiauth routes
//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
 

  // Admin Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});