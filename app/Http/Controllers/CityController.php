<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\StoreCountryRequest;

class CityController extends Controller
{

    public function index()
    {
        $cities = Location::whereIsLeaf()->get();
        return view('locations.city.index')->with('cities', $cities);
    }

    public function create()
    {
        return view('locations.city.form');
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
        $city = Location::where('id', $id)->first();
        return view('locations.city.edit')->with('city' , $city);
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
        $city = Location::where('id', $id)->first();
        return view('locations.city.show')->with('city', $city);
    }
}
