<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCountryRequest;
use App\Models\Location;
use Locale;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Location::whereIsRoot()->get();
        return view('locations.country.index')->with('countries', $countries);
    }

    public function create()
    {
        return view('locations.country.form');
    }

    public function store(StoreCountryRequest $request)
    {
        $countryData = $request->all();
        Location::create($countryData);
        toast('Your Country Has been submited!','success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $country = Location::where('id', $id)->first();
        return view('locations.country.edit')->with('country' , $country);
    }

    public function update($id, StoreCountryRequest $request)
    {
        if(!empty($request->slug)) {
            $countryData['slug'] = $request->slug;
        }
        if(!empty($request->title)) {
            $countryData['title'] = $request->title;
        }
        if(!empty($request->iso_code_2)) {
            $countryData['iso_code_2'] = $request->iso_code_2;
        }
        if(!empty($countryData)) {
            Location::where('id', $id)->update($countryData);
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $node = Location::where('id', $id)->first();
        $node->delete();
        return redirect()->back();
    }

    public function show($id)
    {
        $country = Location::where('id', $id)->first();
        return view('locations.country.show')->with('country', $country);
    }
}
