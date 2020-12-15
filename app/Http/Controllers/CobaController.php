<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba()
    {
        $data = [
            "user"=>"didi",
            "user"=>"koko"
        ];
        return response()->json($data, 502);
    }
}
