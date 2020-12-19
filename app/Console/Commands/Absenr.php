<?php

namespace App\Console\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Command;
use\Absen;
use Illuminate\Support\Facades\DB;
class Absenr extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $schedule->call(function () {
            
           // Absen::where('status', '=', 1)->update(array('status' => 0));
    //    })->everyMinute();
    try {
        DB::table('absen')->where('status', '=', 1)->update(array('status' => 0));
        return $this->info('successfully added');

    } catch (exception $e) {
       return $this->warning('not successfully added');
    }
    }
}
