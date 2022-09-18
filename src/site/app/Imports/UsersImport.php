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
                if (Link::where('user_id', $row[0])->get()->isEmpty()) {
                    Link::create(['user_id' => $row[0], 'token' => $uuid]);
                    $url = url('/acceptInvitation?token='.$uuid);
                    Mail::to($row[2])->send(new ActivationLink($url));
                }
            }
        }
    }
}
