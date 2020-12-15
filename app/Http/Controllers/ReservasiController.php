<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservasiController extends Controller
{

    public function store(Request $request)
    {
        $simpan = Reservation::create($request->all());   
        return response()->json($simpan);
    }

    public function index()
    {
        $data = Reservation::all();   
        return view('index-reservasi',[
            'data' => $data 
        ]);
    }
    

}
