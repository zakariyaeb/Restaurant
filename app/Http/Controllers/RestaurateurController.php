<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Restaurateur;
use Illuminate\Support\Facades\Hash;

class RestaurateurController extends Controller
{
    public function rgs()
    {

     return view('restaurateur');

    }

    public function UploadRestaurant (Request $request)
    {
        $restaurant = new Restaurant ;

        $restaurant->name=$request->name;

        $restaurant->address=$request->address;

        $restaurant->phone=$request->phone;

        $restaurant->save();



        $restaurateur = new Restaurateur;
        $restaurateur->name = $request->FirstName . ' ' . $request->LastName;
        $restaurateur->email = $request->email;
        $restaurateur->phone =$request->RestaurateurPhone;
        $restaurateur->password = Hash::make($request->password);
        $restaurateur->restaurant_id = $restaurant->id;
        $restaurateur->save();

        return redirect ()->back(); 

    

    }
}
