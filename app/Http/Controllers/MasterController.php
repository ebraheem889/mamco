<?php

namespace App\Http\Controllers;

use App\Sell;
use Illuminate\Http\Request;

class MasterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only('sell');
        $this->middleware(['auth'])->only('buy');
    }

    public function index(){

        return view('site.index');
    }

    public function call(){

        return view('site.call');
    }


    public function about(){

        return view('site.about');

    }

    public function pending(){


        return view('site.pending');
    }





}
