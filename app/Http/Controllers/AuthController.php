<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "NIS" => 3103120193,
            "Name" => 'Rey aja',
            "Phone" => '081391144755',
            "Class" => 'XII RPL 6'
        ];
    }
}
