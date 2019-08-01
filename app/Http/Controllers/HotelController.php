<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Validator;

class HotelController extends Controller
{
    public function getHotels()
    {
        return response()->json(Hotel::all(), 200);
    }

    public function getHotelById($id)
    {
        $hotel = Hotel::find($id);
        if ( is_null($hotel) ) {
            return response()->json(['message' => 'No record found!'], 404);
        }
        return response()->json($hotel, 200);
    }

    public function hotelSave(Request $request)
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ( $validator->fails() ) {
            return response()->json($validator->errors(), 400);
        }

        $hotel = Hotel::create($request->all());
        return response()->json($hotel, 201);
    }

    public function hotelUpdate(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if ( is_null($hotel) ) {
            return response()->json(['message' => 'No record found!'], 404);
        }
        $hotel->update($request->all());
        return response()->json($hotel, 200);
    }

    public function hotelDelete(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if ( is_null($hotel) ) {
            return response()->json(['message' => 'No record found!'], 404);
        }
        $hotel->delete();
        return response()->json(null, 204);
    }
}
