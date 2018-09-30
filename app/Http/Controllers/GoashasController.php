<?php

namespace App\Http\Controllers;

use App\Goashas;
use Illuminate\Http\Request;

class GoashasController extends Controller
{

    public function showAllGoashas()
    {
        return response()->json(Goashas::all());
    }

    public function showOneGoasha($id)
    {
        return response()->json(Goashas::find($id));
    }

    public function create(Request $request)
    {
        $Goashas = Goashas::create($request->all());

        return response()->json($Goashas, 201);
    }

    public function update($id, Request $request)
    {
        $Goashas = Goashas::findOrFail($id);
        $Goashas->update($request->all());

        return response()->json($Goashas, 200);
    }

    public function delete($id)
    {
        Goashas::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}