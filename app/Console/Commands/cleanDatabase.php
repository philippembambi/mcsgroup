<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cleanDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mcs:clean-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nettoyer la base de données';

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
     * @ return string
     */
    public function handle()
    {
        $this->info("Loading Mcs commands");
        #$this->error("Helo my command");
        #$this->line("Helo my command");
        $users = \App\Models\User::all();
        $UserArgs = \App\Models\User::get(['fullname', 'phone_number', 'email']);
        $header = ['Nom', 'Phone', 'email'];
        $bar = $this->output->createProgressBar(count($users));
        $bar->start();

        foreach ($users as $user) {
            \sleep(1);
            $bar->advance();
        }
        $bar->finish();
                    $this->table($header, $UserArgs);
    }
}
