<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

protected function schedule(Schedule $schedule)
{
    $schedule->call(fn() => DB::table('invites')->where('status', 'pending')->delete())
        ->daily();
}
}