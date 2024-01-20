<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home(){
        return view('front.pages.home',$this->data);
    }


    public function author(){
        return view('front.pages.author',$this->data);
    }


}
