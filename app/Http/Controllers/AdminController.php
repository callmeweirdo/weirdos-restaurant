<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users(){

        $users = User::all();
        return view("admin.users", compact("users"));
    }


    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function foodmenu(){
        return view('admin.foodmenu');
    }

    public function makefood(Request $request ){
        // $food = Food::class;

        $image = $request->image;
        $imageName = time().'-'.$request->title.'.'.$image->extension();

        $image->move(public_path('foodimages/', $imageName));

        // $food->title = $request->title;

        Food::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description
        ]);

        return redirect()->back();



    }

}
