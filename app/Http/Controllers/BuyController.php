<?php

namespace App\Http\Controllers;

use App\Sell;
use App\User;
use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function index(Request $request){

        $sells = Sell::ActiveProduct()->WhenProductSearch(request()->search2)->WhenProductAndCompanySearch(request()->search)->paginate(10);
        return view('site.buy' ,compact('sells'));
    }

}
