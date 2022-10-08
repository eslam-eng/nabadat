<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Managers\LocationManager;
use App\Http\Requests\StoreCountryRequest;

class GovernorateController extends Controller
{

    public function index()
    {
        $nodes = Location::whereIsRoot()->get();
        return view('locations.governorate.index')->with('nodes', $nodes);
    }

    public function create()
    {
        $countries = Location::whereIsRoot()->get();
        return view('locations.governorate.form')->with('countries',$countries);
    }

    public function store(StoreCountryRequest $request)
    {
        $governateData = $request->all();
        $parent = Location::where('id','=', $request->parent_id)->first();
        Location::create($governateData, $parent);
        toast('Your Governorate Has been submited!','success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $governorate = Location::where('id', $id)->first();
        return view('locations.governorate.edit')->with('governorate' , $governorate);
    }

    public function update($id, StoreCountryRequest $request)
    {
       $mngr = new LocationManager;
       $mngr->updateLocation($id, $request);
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
        $governorate = Location::where('id', $id)->first();
        return view('locations.governorate.show')->with('governorate', $governorate);
    }
}
