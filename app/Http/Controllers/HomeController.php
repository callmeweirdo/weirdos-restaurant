<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchef;

class HomeController extends Controller
{
    public function index(){
        return view('home')->with('foods', Food::orderBy('created_at', 'Desc'))
        ->with('foodchefs', Foodchef::orderBy('created_at', 'Desc')->get());
    }


    public function redirects(){
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.index');
        }else{
            return view('home')->with('foods', Food::orderBy('created_at', 'Desc')->get());
        }
    }


}
