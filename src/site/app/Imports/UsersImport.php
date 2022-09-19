<?php

namespace App\Imports;

use App\Mail\ActivationLink;
use App\Models\Link;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach($rows as $key => $row) {
            if ($key > 0) {
                $uuid = (string) Str::uuid();
                $user = User::where('email', $row[1])->first();
                if ($user !== null) {
                    if (Link::where('user_id', $user->id)->get()->isEmpty()) {
                        $url = url('/acceptInvitation?token='.$uuid);
                        Link::create(['user_id' => $user->id, 'token' => $uuid]);
                        Mail::to($row[1])->send(new ActivationLink($url));
                    }
                }
            }
        }
    }
}
