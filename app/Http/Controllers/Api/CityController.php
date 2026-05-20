<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $citis= City::withcount('ads')
            ->orderBy('ads_count', 'desc')
                ->get();

        return CityResource::collection($citis);
    }

    public function show($id)
    {
        $city= City::withcount('ads')
            ->findOrFail($id);

        return new CityResource($city);
    }
}
