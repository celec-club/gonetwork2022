<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithProperties;

class UsersExport implements FromCollection, WithMapping, WithHeadings {
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() {
        return User::all();
    }

    public function headings(): array {
        return [
            "ID",
            "fullname",         
            "email",          
            "phone",     
            "education_level", 
            "field",        
            "matricule",      
            "id_number",      
            "is_usthb",          
            "is_member",
            "accepted",
            "scanned_times",
            "created_at"
        ];
    }

    public function map($user): array {
        return [
            $user->id,
            $user->fullname,
            $user->email,
            $user->phone,
            $user->education_level,
            $user->field,
            $user->matricule,
            $user->id_number,
            $user->is_usthb,
            $user->is_member,
            $user->accepted,
            (string)$user->scanned_times,
            $user->created_at
        ];
    }

}
