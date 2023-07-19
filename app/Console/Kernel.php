<?php

namespace App\Console;

use App\Jobs\Jobs\NotifyTrialEndsTomorrow as JobsNotifyTrialEndsTomorrow;
use App\Jobs\NotifyTrialEndsTomorrow;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\DailyUpdate::class,
        \App\Console\Commands\TransitionSubscription::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('day:update')
                ->hourly();
                $users=User::all();
                foreach ($users as $user) {
                    $schedule->command(TransitionSubscriptionCommand::class, ['user_id' => $user->id])
                             ->daily(); 
                }
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
