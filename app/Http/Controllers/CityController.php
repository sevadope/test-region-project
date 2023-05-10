<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CityController extends Controller
{
    private const CITY_COOKIE_NAME = 'selected_city';

    public function index(Request $request)
    {
        $all_cities = City::all();
        $selected_city = $request->cookie(self::CITY_COOKIE_NAME);

        if (is_null($selected_city)) {
            return view('cities.index', ['cities' => $all_cities]);
        } else {
            return redirect()->route('cities.show', ['city' => $selected_city]);
        }
    }

    public function show(Request $request, City $city)
    {
        Cookie::queue(self::CITY_COOKIE_NAME, $city->getRouteKey());
        $all_cities = City::all();
        
        return view('cities.index', ['city' => $city, 'cities' => $all_cities]);
    }
}
