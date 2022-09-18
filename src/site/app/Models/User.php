<?php

namespace App\Models;

use App\Models\Qr;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "fullname",         
        "email",          
        "password",        
        "phone",     
        "education_level", 
        "field",        
        "matricule",      
        "id_number",      
        "is_usthb",          
        "is_member",
        "accepted",
        "scanned_times",
        'invitation'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "is_usthb"  => "boolean",
        "is_member" => "boolean",
        "accepted" => "boolean"
    ];


    public function qr() {
        return $this->hasOne(Qr::class);
    }

    public function createCodeQr() {
        $qr = QrCode::format("png")->size(1000)->gradient(101, 247, 238, 0, 58, 145, "diagonal")->errorCorrection("H")->generate($this->id);
        return Storage::put("public/qrs/{$this->id}_qr.png", $qr);
    }

}
