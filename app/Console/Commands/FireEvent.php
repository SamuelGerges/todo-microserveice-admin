<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    protected $signature = 'fire';

    protected $description = 'Command description';

    public function handle()
    {
        TestJob::dispatch();
    }
}
