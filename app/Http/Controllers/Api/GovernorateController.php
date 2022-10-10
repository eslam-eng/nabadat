<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\GovernorateService;
use App\Repositories\LocationRepository;
use Illuminate\Http\Request;
use App\Traits\ApiResponses;
class GovernorateController extends Controller
{
    use ApiResponses;

    public function list($id)
    {
        $countryServiceObj  = new GovernorateService(new LocationRepository);
        $response = $countryServiceObj->listGovernorates($id);
        return $response;
    }
}
