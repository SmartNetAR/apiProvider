<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaveApiMovieToDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SaveApiMovieToDB:saveMovie';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save new movies';

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
        //get movies and save into database
    }
}
