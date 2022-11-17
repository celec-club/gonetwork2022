<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GetUsersJsonFromPdf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:users';

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
     * @return int
     */
    public function handle()
    {
        $files = scandir(storage_path('app/splitted-pdfs'));
        unset($files[0]);
        unset($files[1]);
        $users = [];
        foreach($files as $file) {
            $file = explode(".", $file);
            $user = User::where('fullname', $file[0])->get()->first();
            if ($user !== null) {
                array_push($users, [$user->fullname, $user->email]);
            }
        }
        echo json_encode($users);
    }
}
