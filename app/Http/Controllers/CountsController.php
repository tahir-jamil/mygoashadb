<?php

namespace App\Http\Controllers;

use App\Counts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountsController extends Controller
{

    public function showAllCounts()
    {
        return response()->json(Counts::all());
    }

    public function showOneCount($id)
    {
        $users = DB::table('counts')
        ->where('party_id', '=', $id)
        ->get();
        return response()->json($users);
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