<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index')
            ->with(compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show')
            ->with(compact('restaurant'));
    }
}
