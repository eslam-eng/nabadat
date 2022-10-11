<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\StoreCountryRequest;
use App\DataTables\CitiesDataTable;
use App\Services\GovernorateService;
use App\Repositories\LocationRepository;
class CityController extends Controller
{

    public function index(CitiesDataTable $dataTables)
    {
        return $dataTables->render('locations.city.index');
    }

    public function create()
    {
        $governates = Location::withDepth()->having('depth', '=', 1)->get();
        return view('locations.city.form')->with('governates' , $governates);
    }

    public function store(StoreCountryRequest $request)
    {
        $governateData = $request->all();
        $governateService = new GovernorateService(new LocationRepository);
        $governateService->PrepareLocationData($governateData);
        toast('Your Country Has been submited!','success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $city = Location::where('id', $id)->first();
        $city->title_translations = $city->getTranslations('title');
        $governates = Location::withDepth()->having('depth', '=', 1)->get();
        return view('locations.city.edit')->with(['city' => $city, 'governates' =>$governates]);
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
        $city = Location::where('id', $id)->first();
        return view('locations.city.show')->with('city', $city);
    }
}
