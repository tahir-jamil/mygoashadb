<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Counts;

class PartyController extends Controller
{

    public function showAllPartys()
    {
        return response()->json(Party::all());
    }
    
    public function login($username, $password)
    {

        $users = DB::table('parties')
        ->where('username', '=', $username )
        ->where('password', '=', $password )
        ->get();
        // return view('user.index', ['users' => $users]);
        return response()->json($users);
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