<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\LocationService;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
class LocationController extends Controller
{
    use ApiResponses;

    public function list()
    {
        $countryServiceObj  = new LocationService(new LocationRepository);
        $response = $countryServiceObj->listCountries();
        return $response;
    }

    public function listChildren($id)
    {
        $countryServiceObj  = new LocationService(new LocationRepository);
        $response = $countryServiceObj->listGovernorates($id);
        return $response;
    }

}
