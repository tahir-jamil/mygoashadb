<?php

namespace App\Http\Controllers;

use App\Counts;
use Illuminate\Http\Request;

class CountsController extends Controller
{

    public function showAllCounts()
    {
        return response()->json(Counts::all());
    }

    public function showOneCount($id)
    {
        return response()->json(Counts::find($id));
    }

    public function create(Request $request)
    {
        $Counts = Counts::create($request->all());

        return response()->json($Counts, 201);
    }

    public function update($id, Request $request)
    {
        $Counts = Counts::findOrFail($id);
        $Counts->update($request->all());

        return response()->json($Counts, 200);
    }

    public function delete($id)
    {
        Counts::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}