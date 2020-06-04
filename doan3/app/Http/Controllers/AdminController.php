<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('dashboard');
    }
    public function getIcons(){
        return view('icons');
    }
    public function getMap(){
        return view('map');
    }
    public function getUser(){
        return view('user');
    }
    public function getTrain(){
        return view('train');
    }
    public function getForecast(){
        return view('forecast');
    }
}
