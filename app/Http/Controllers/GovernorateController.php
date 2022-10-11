<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\StoreCountryRequest;
use App\Repositories\LocationRepository;
use App\Services\GovernorateService;
use App\DataTables\GovernoratesDataTable;

class GovernorateController extends Controller
{

    public function index(GovernoratesDataTable $dataTables)
    {
        return $dataTables->render('locations.governorate.index');
    }

    public function create()
    {
        $countries = Location::whereIsRoot()->get();
        return view('locations.governorate.form')->with('countries',$countries);
    }

    public function store(StoreCountryRequest $request)
    {
        $governateData = $request->all();
        $governateService = new GovernorateService(new LocationRepository);
        $governateService->PrepareLocationData($governateData);
        toast('Your Governorate Has been submited!','success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $governorate = Location::where('id', $id)->first();
        $countries = Location::whereIsRoot()->get();
        $governorate->title_translations = $governorate->getTranslations('title');
        return view('locations.governorate.edit')->with(['governorate'  => $governorate, "countries" => $countries]);
    }

    public function update($id, StoreCountryRequest $request)
    {
        $service = new GovernorateService(new LocationRepository);
        $service->updateLocation($id, $request);
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
