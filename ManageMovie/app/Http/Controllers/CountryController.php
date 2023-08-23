<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries=Country::all();
        return view('countries.index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = new Country();
        $country->namecountry = $request->namecountry;
        $country->zipcode = $request->zipcode;
        $country->continents = $request->continents;
        $country->save();
        return redirect('country');
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id)
    {
        $country = Country::find($id);
        return view('countries.show', ['country' => $country]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::find($id);
        return view('countries.edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = Country::find($id);
        $country->namecountry = $request->namecountry;
        $country->zipcode = $request->zipcode;
        $country->continents = $request->continents;
        $country->save();
        return redirect('/country');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);
        $country->delete();
        return redirect('/country');
    }
}
