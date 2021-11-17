<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $params = $request->query();
        $restaurants = Restaurant::search($params)->simplePaginate(10);
        $restaurants->appends(compact('name', 'category'));

        return view('restaurants.index')
            ->with(compact('restaurants'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show')
            ->with(compact('restaurant'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('restaurants.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'opentime' => 'required',
        ]);
        
        return view('restaurants.create', compact('categories'));
    }
}
