<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoadController extends Controller
{
    public function index()
    {

        $data = DB::table('data')->get()->toArray();
        // dd($data); // dd : dump and die -> dung de in du lieu ra


        $error = DB::table('error')->get()->first();
        // dd($error);
        return view('icons',['data' => $data, 'error' => $error ]);
    }

}
