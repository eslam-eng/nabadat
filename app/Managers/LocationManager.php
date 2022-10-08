<?php

namespace App\Managers;
use App\Models\Location;
use App\Exceptions\BadRequestHttpException;
class LocationManager
{

    public function updateLocation($id, $request)
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
        return true;
    }
}
