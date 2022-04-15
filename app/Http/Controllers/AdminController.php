<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\Console\Input\Input;

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
        return view('admin.foodmenu')->with('foods', Food::orderBy('Created_at', 'DESC')->get());
    }

    public function makefood(Request $request ){
        // $food = Food::class;


        $image = $request->image;
        $imageName = uniqid().'-'.$request->title.'.'.$image->extension();

        $path = public_path().'/foodimages/';

        $image->move($path, $imageName);

        // $food->title = $request->title;

        Food::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function deletefood($id){
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
    }

    public function editfood($id){
        $food = Food::find($id);
        return view('admin.editfood', compact('food'));
    }

    public function updatefood(Request $request, $id){

        $image = $request->image;
        $imageName = uniqid().'-'.$request->title.'.'.$image->extension();

        $path = public_path().'/foodimages/';

        $image->move($path, $imageName);


        Food::where('id', $id)
            ->update([
                'title' => $request->title,
            'price' => $request->price,
            'image' => $imageName,
            'description' => $request->description
            ]);

            return redirect()->back();
    }

    public function reservation(Request $request){
        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message
        ]);
        return redirect()->back();
    }

    public function viewreservations(){

        return view('admin.viewreservations')->with('reservations', Reservation::all());
    }


    public function foodchefs(){
        return view('admin.foodchefs')->with('foodchefs', Foodchef::orderBy('created_at', 'DESC')->get());
    }

    public function makechef(Request $request){

        $image = $request->image;

        $imageName = uniqid().'-'.$request->name.'.'.$image->extension();

        $path = public_path().'/chefimages/';

        $image->move($path, $imageName);


        Foodchef::create([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'image' => $imageName,
            'description' => $request->description
            ]);

            return redirect()->back();
    }

    public function editchef($id){

        return view('admin.editchef')->with('chef', Foodchef::where('id', $id)->first());
    }

    public function updatechef(Request $request, $id){
        $image = $request->image;
        $imageName = uniqid().'-'.$request->name.'.'.$image->extension();

        $path = public_path().'/chefimages/';

        $image->move($path, $imageName);


        Foodchef::where('id', $id)
            ->update([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'image' => $imageName,
            ]);

            return redirect()->back();
    }

    public function deletechef($id){
        $chef = Foodchef::find($id);
        $chef->delete();

        return redirect()->back();
    }

}
