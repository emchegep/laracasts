<?php

namespace App\Console\Commands;

use App\Jobs\test;
use Illuminate\Console\Command;

class SendTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatch:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        test::dispatch();
    }
}
