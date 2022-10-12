<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCountryRequest;
use App\Models\Location;
use App\DataTables\CountriesDataTable;
use App\Services\CountryService;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\LocationRepository;
class CountryController extends Controller
{

    public function index(CountriesDataTable $dataTables)
    {
        return $dataTables->render('locations.country.index');
    }

    public function create()
    {
        return view('locations.country.form');
    }

    public function store(StoreCountryRequest $request)
    {
        toast('Info Toast','info');
        $countryData = $request->all();
        $service = new CountryService(new LocationRepository);
        $service->PrepareLocationData($countryData);
        Alert::success('Success Title', 'Success Message');
        return redirect()->back();
    }

    public function edit($id)
    {
        $country = Location::where('id', $id)->first();
        $country->title_translations = $country->getTranslations('title');
        return view('locations.country.edit')->with('country' , $country);
    }

    public function update($id, StoreCountryRequest $request)
    {
        $service = new CountryService(new LocationRepository);
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
        $country = Location::where('id', $id)->first();
        return view('locations.country.show')->with('country', $country);
    }
}
