<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CertficationController extends Controller {

    public function create(Request $request) {
        $validatedData = $request->validate([
            "fullname" => "required"
        ]);
        $fullName = strtoupper($validatedData["fullname"]);
        $img = Image::make('images/cert.png')->text($fullName, 400, 340, function($font) {  
            $font->file("webfonts/Monotype Corsiva.ttf");  
            $font->size(52);
            $font->color('#2E3989');
            $font->align('center');  
            $font->angle(0);  
        });

        $response = Response::make($img->encode('png'));
        $response->header('Content-Type', 'image/png');
        return $response;
    }

}
