<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function province()
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json";
        $provinces = json_decode(file_get_contents($url), true);

        return response()->json($provinces);
    }
    
    public function city($id)
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$id}.json";
        $regencies = json_decode(file_get_contents($url), true);

        return response()->json($regencies);
    }

    public function district($id)
    {
        $url = "https://www.emsifa.com/api-wilayah-indonesia/api/districts/{$id}.json";
        $regencies = json_decode(file_get_contents($url), true);

        return response()->json($regencies);
    }
}
