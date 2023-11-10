<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temperature;

class TemperatureController extends Controller
{
    public function index()
    {
        $temperatures = Temperature::all();
        return response()->json($temperatures);
    }

    public function show($id)
    {
        $temperature = Temperature::find($id);
        return response()->json($temperature);
    }

    public function store(Request $request)
    {
        $temperature = Temperature::create($request->all());
        return response()->json($temperature, 201);
    }

    public function update(Request $request, $id)
    {
        $temperature = Temperature::find($id);
        $temperature->update($request->all());
        return response()->json($temperature, 200);
    }

    public function destroy($id)
    {
        Temperature::destroy($id);
        return response()->json(null, 204);
    }
}
