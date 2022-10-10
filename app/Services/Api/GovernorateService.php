<?php

namespace App\Services\Api;
use App\Models\Location;
use App\Repositories\LocationRepository;
use App\Http\Resources\GetListGovernoratesResource;
use App\Traits\ApiResponses;
use App\Exceptions\NotFoundHttpException;
use Exception;

class GovernorateService
{
    use ApiResponses;

    private $locationRepo;

    public function __construct(LocationRepository $locRepo)
    {
        $this->locationRepo = $locRepo;
    }

    public function listGovernorates($id)
    {
        $location = $this->locationRepo->getCountryById($id);
        if (is_null($location)) {
            throw new NotFoundHttpException('this location not found', 400);
        }
        $countryWithGovernorates = $this->locationRepo->listGovernorates($id);
        $governorates = $countryWithGovernorates->children;
        $list['status'] = true;
        $list['list'] = GetListGovernoratesResource::collection($governorates);
        return $this->successResponse($list);
    }
}
