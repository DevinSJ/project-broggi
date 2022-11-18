<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//Command generate iseed to all tables.
Artisan::command('iseed:all {--force}', function () {
    //Get all tables from database.
    $tables = DB::select('SHOW FULL TABLES WHERE Table_Type = "BASE TABLE"');

    foreach ($tables as $table) {
        foreach ($table as $key => $value) {
            $this->call('iseed', ['tables' => $value, '--force' => $this->option('force')]);
        }
    }
})->purpose('Generate iseed all tables');
