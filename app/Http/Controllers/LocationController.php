<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCountryRequest;
use App\Models\Country;
use RealRashid\SweetAlert\Facades\Alert;


class LocationController extends Controller
{

    public function getCountryForm()
    {
        return view('locations.country.form');
    }

    public function addCountry(StoreCountryRequest $request)
    {
        $countryData = $request->all();
        Country::create($countryData);
        toast('Your Country as been submited!','success');
        return redirect()->back();
    }

    public function getGovernateForm()
    {
        $countries = Country::whereIsRoot()->get();
        return view('locations.governorate.form')->with('countries',$countries);
    }

    public function getCityForm()
    {
        $governates = Country::whereNotNull('parent_id')->get();
        return view('locations.city.form')->with(['governates' => $governates]);
    }

    public function addGovernateToCountry(Request $request)
    {
        $governateData = $request->all();
        $parent = Country::where('id','=', $request->parent_id)->first();
        Country::create($governateData, $parent);
        return redirect()->back();
    }

    public function addCityToGovernate(Request $request)
    {
        $cityData = $request->all();
        $parent = Country::where('id','=', $request->parent_id)->first();
        Country::create($cityData, $parent);
        return redirect()->back();
    }
}
