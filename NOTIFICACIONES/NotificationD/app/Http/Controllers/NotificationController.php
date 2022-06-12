<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\DemoNotification;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function borrar() 
    {
        // DB::table('tablaprueba')->delete();
        $path = app_path();
        dd($path);
    }
  
    // public function send(Request $request)
    // {
        
   
    //     dd('Your notification send seuccessfully!');
    // }  
}