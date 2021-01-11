<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all()->sortBy('name');

        return view('cities.all', ['cities' => $cities]);
    }

    public function create()
    {
        $countries = Country::all()->sortBy('name');
        return view('cities.create', ['countries' => $countries]);
    }

    public function store(Request $request)
    {
        City::create([
            'name'  => $request->name,
            'country_id' => $request->country_id,
            'description'   => $request->description
        ]);

        session()->flash('success', 'City added successfully');

        return redirect('/cities');
    }


    public function show($id)
    {
        $city = City::find($id);
        $countries = Country::all();

        return view('cities.show', ['city' => $city, 'countries' => $countries]);
    }
    
    public function edit(Request $request)
    {
        City::find($request->id)
            ->update([
                'name'  => $request->name,
                'country_id' => $request->country_id,
                'description'   => $request->description
            ]);


        $request->session()->flash('success', 'City details updated successfully');

        return redirect("/city/$request->id");
    }

    public function destroy($id)
    {
        City::destroy($id);

        session()->flash('success', 'City deleted successfully');

        return redirect('/cities');
    }
}
