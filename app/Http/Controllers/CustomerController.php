<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Show all customers
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customers.all', ['customers' => $customers]);
    }

    /**
     * Show single customer
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $countries = Country::all();

        return view('customers.show', ['customer' => $customer, 'countries' => $countries]);
    }

    /**
     * Show add customer form
     */
    public function create()
    {
        $countries = Country::all();
        return view('customers.create', ['countries' => $countries]);
    }

    /**
     * Show add customer form
     */
    public function store(Request $request)
    {

        Customer::create([
            'firstname'  => $request->firstname,
            'lastname'   => $request->lastname,
            'email'      => $request->email,
            'telephone'  => $request->telephone,
            'country_id' => $request->country_id
        ]);


        $request->session()->flash('success', 'New customer craeted successfully');

        return redirect('/customers');
    }

    /**
     * Edit customer details
     */
    public function edit(Request $request)
    {
        Customer::find($request->id)
            ->update([
                'firstname'  => $request->firstname,
                'lastname'   => $request->lastname,
                'email'      => $request->email,
                'telephone'  => $request->telephone,
                'country_id' => $request->country_id
            ]);

        $customer = Customer::find($request->id);
        $countries = Country::all();

        $request->session()->flash('success', 'Customer details updated successfully');

        return view('customers.show', ['customer' => $customer, 'countries' => $countries]);
    }

    /**
     * Delete customer
     */
    public function destroy($id)
    {
        Customer::destroy($id);

        session()->flash('success', 'Customer deleted successfully');

        return redirect('/customers');
    }
}
