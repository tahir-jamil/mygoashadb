<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{

    public function showAllPartys()
    {
        return response()->json(Party::all());
    }

    public function showOneParty($id)
    {
        return response()->json(Party::find($id));
    }

    public function create(Request $request)
    {
        $Party = Party::create($request->all());

        return response()->json($Party, 201);
    }

    public function update($id, Request $request)
    {
        $Party = Party::findOrFail($id);
        $Party->update($request->all());

        return response()->json($Party, 200);
    }

    public function delete($id)
    {
        Party::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}