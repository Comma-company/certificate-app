<?php

namespace App\Console;

use App\Jobs\Jobs\NotifyTrialEndsTomorrow as JobsNotifyTrialEndsTomorrow;
use App\Jobs\NotifyTrialEndsTomorrow;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Artisan;

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
                $schedule->call(function () {
                    $userId = auth()->id();
                    if ($userId) {
                        Artisan::call('subscriptions:transition', ['user_id' => $userId]);
                    }
                })->daily();
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
