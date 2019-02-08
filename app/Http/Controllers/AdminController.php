<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function dashboard(){
        return view('b.dashboard');
    }


    public static function cards(){
        return view('b.cards');
    }
}
