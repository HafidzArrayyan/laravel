<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LiquidController extends Controller
{
    //tambahkan ini
    public function liquid(){
        $data="Data All Liquid";
        return response()->json($data, 200);
    }public function liquidAuth(){
        $data="Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }
}
