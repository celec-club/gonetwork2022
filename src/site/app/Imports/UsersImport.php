<?php

namespace App\Imports;

use App\Jobs\InsertUsersLinks;
use App\Jobs\SendEmail;
use App\Mail\ActivationLink;
use App\Models\Link;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $linksToInsert = [];
        foreach($rows as $key => $row) {
            if ($key > 0) {
                $uuid = (string) Str::uuid();
                $user = User::where('email', $row[1])->first();
                if ($user !== null) {
                    array_push($linksToInsert, ['user_id' => $user->id, 'token' => $uuid, 'sended' => false, 'created_at' => Carbon::now()]);
                }
            }
        }
        Bus::chain([
            new InsertUsersLinks($linksToInsert),
            new SendEmail
        ])->dispatch();
    }
}
