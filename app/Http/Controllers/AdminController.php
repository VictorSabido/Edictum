<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Card;
use App\Category;
use Faker;

class AdminController extends Controller
{
    public function __construct()
    {

    }


    public static function test(){

        $card = Card::orderBy('id', 'desc')->first();

        // dd($card);

        return view('test', compact('card'));
    }


    public static function dashboard(){
        $t=date('m/d/Y H:m:s');
        // echo $t;
        echo Carbon::createFromTimestamp(-1)->toDateTimeString(); 
        echo '<br/>';
        echo Carbon::now();
        dd();
        // dd(date('m/d/Y H:m:s', $t));
        return view('b.dashboard');
    }


    public static function cards(){
        return view('b.cards');
    }


    public static function saveCard(Request $request){


        // dd(Carbon::now());

        $card = new Card;
        $card->date = Carbon::now();
        $card->status = 1;
        // $card->order = ;
        $card->slug = '';
        $card->media = '';
        $card->title = '';
        $card->body = '';
        $card->save();

        return redirect()->back();
    }
}
