<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function get(Request $request)
    {
        if ($request->id == null) {
            $provinces = Province::all();
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "data" => $provinces
            ]);
        }
        if(Province::where('id', $request->id)->first() != null){
            $province = Province::where('id', $request->id)->first();
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "data" => $province
            ]);
        }else{
            return response()->json([
                "status" => 404,
                "message" => "Province not found",
                "data" => null
            ]);
        }
    }

    public function post(Request $request)
    {
        $province = Province::create([
            'name' => $request->name,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'google_place_id' => $request->google_place_id
        ]);
        return response()->json([
            "status" => 200,
            "message" => "Success",
            "data" => $province
        ]);
    }

    public function put(Request $request)
    {
        if (Province::where('id', $request->id)->first() != null) {
            $province = Province::where('id', $request->id)->first();
            if($request->name != null) $province->name = $request->name;
            if($request->lat != null) $province->lat = $request->lat;
            if($request->lng != null) $province->lng = $request->lng;
            if($request->google_place_id != null) $province->google_place_id = $request->google_place_id;
            $province->update();
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "data" => $province
            ]);
        } else {
            return response()->json([
                "status" => 404,
                "message" => "Province not found",
                "data" => null
            ]);
        }
    }

    public function delete(Request $request)
    {
        if (Province::where('id', $request->id)->first() != null) {
            $province = Province::where('id', $request->id)->first();
            $province->delete();
            return response()->json([
                "status" => 200,
                "message" => "Success",
                "data" => $province
            ]);
        }else{
            return response()->json([
                "status" => 404,
                "message" => "Province not found",
                "data" => null
            ]);
        }
    }
}
