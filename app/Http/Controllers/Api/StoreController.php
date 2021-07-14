<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function create(Request $request)
    {
        $store = Store::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone 
        ]);

        return response()->json([
            'message' => "created.",
            "data" => $store
        ]);
    }
}
