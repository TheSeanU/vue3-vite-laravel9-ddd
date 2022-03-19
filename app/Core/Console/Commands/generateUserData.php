<?php

namespace App\Core\Console\Commands;

use Illuminate\Console\Command;

class generateUserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /**
         * Run the database seeder command.
         *
         * @param  string  $database
         * @return void
         */
        $this->call('migrate:fresh');
        
        $this->call('db:seed', array_filter([
            '--class' => 'App\\Core\\Database\\Seeders\\DatabaseSeeder',
            '--force' => true,
        ]));
        
    }
}
