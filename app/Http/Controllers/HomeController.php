<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

      public function welcomeredirect()
    {
        return view('welcomeerrorcorrection');
 
    }


      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsymlink()
    {
        
    $target = '/var/www/html/swatantrahunt/storage/app/public'; 
    $shortcut = '/var/www/html/swatantrahunt/public/storage'; 
    symlink($target, $shortcut); 
    return 'symlink created';

    }




}
