<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Card;
use App\Category;
use Validator;
use Faker;

class AdminController extends Controller
{
    public function __construct()
    {

    }


    public static function test(){

        $card = Card::orderBy('id', 'desc')->first();
        $categories = Category::get();

        // dd($card);

        return view('test', compact('card', 'categories'));
    }


    public static function dashboard(){
        $t=date('m/d/Y H:m:s');
        // echo $t;
        // echo Carbon::createFromTimestamp(-1)->toDateTimeString(); 
        // echo '<br/>';
        // echo Carbon::now();
        // dd();
        // dd(date('m/d/Y H:m:s', $t));
        return view('b.dashboard');
    }


    public static function cards(){
        return view('b.cards');
    }


    public static function saveCard(Request $request){

        //Validator
        $rules = [
            'title'     => 'required|max:255',
            'slug'      => 'required|url',
            'body'      => 'required',
            'category'  => 'required',
            'file'      => 'sometimes|required|mimes:jpeg,jpg,png',
        ];

        $messages = [];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails())
        {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput();
        }
        
        dd($validator);
        $card = new Card;
        $card->date = Carbon::now();
        $card->status = 1;
        // $card->order = ;
        $card->slug = '';
        $card->media = '';
        $card->title = '';
        $card->body = '';
        $card->save();

        dd();
        return redirect()->back();
    }
}
