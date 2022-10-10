<?php

namespace App\Repositories;
use App\Models\Location;

class LocationRepository
{
    public function listCountries()
    {
        return Location::whereIsRoot()->get();
    }

    public function getCountryById($id)
    {
        return Location::where('id', $id)->first();
    }

    public function listChildren($id)
    {
        $governorates = Location::where('id', $id)->with('children')->first();
        return $governorates;
    }
}
