<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Notification;
use App\Notifications\DemoNotification;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            DB::table('tablaprueba')->delete();
            $user = User::first();
  
            $details = [
                'greeting' => 'Hi Artisan',
                'body' => 'This is my first notification from HackTheStuff',
                'thanks' => 'Thank you for using HackTheStuff article!',
                'actionText' => 'View My Site',
                'actionURL' => url('https://hackthestuff.com'),
                'order_id' => 'Order-20190000151'
            ];
    
            Notification::send($user, new DemoNotification($details));
        })->everyTwoMinutes();	



        // $schedule->command('schedule:work')->everyMinute();
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
