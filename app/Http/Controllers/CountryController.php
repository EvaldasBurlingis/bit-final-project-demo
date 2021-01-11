<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Show all countries
     */
    public function index()
    {
        $countries = Country::all()->sortBy('name');

        return view('countries.all', ['countries' => $countries]);
    }

    /**
     * Show add new country form
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Save country
     */
    public function store(Request $request)
    {
        Country::create([
            'name'  => $request->name,
            'description'   => $request->description
        ]);

        session()->flash('success', 'Country added successfully');

        return redirect('/countries');
    }

    /**
     * Show single country
     */
    public function show($id)
    {
        $country = Country::find($id);

        return view('countries.show', ['country' => $country]);
    }

    /**
     * Show single country
     */
    public function show_edit($id)
    {
        $country = Country::find($id);

        return view('countries.edit', ['country' => $country]);
    }

    /**
     * Edit country details
     */
    public function edit(Request $request)
    {
        Country::find($request->id)
            ->update([
                'name'  => $request->name,
                'description'   => $request->description
            ]);

        $country = Country::find($request->id);

        $request->session()->flash('success', 'Country details updated successfully');

        return view('countries.edit', ['country' => $country]);
    }

}
