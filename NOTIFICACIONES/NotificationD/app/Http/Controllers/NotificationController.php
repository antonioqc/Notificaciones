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
    //     $user = User::first();
  
    //     $details = [
    //         'greeting' => 'Hi Artisan',
    //         'body' => 'This is my first notification from HackTheStuff',
    //         'thanks' => 'Thank you for using HackTheStuff article!',
    //         'actionText' => 'View My Site',
    //         'actionURL' => url('https://hackthestuff.com'),
    //         'order_id' => 'Order-20190000151'
    //     ];
  
    //     Notification::send($user, new DemoNotification($details));
   
    //     dd('Your notification send seuccessfully!');
    // }  
}