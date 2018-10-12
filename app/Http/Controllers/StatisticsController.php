<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    public function statistics($region)
    {
        $users = DB::table('parties')
        ->join('counts', 'parties.id', '=', 'counts.party_id')
        ->select(($region .' as filterName'), DB::raw('sum(duroodCount) as total'))
        ->groupBy($region)
        ->get();
        
        // return view('user.index', ['users' => $users]);
        return response()->json($users);
    }
    
    public function totalcounts()
    {
        $users = DB::table('parties')
        ->select('duroodCount')
        ->join('counts', 'parties.id', '=', 'counts.party_id')
        ->sum('duroodCount');
        return response()->json($users);
    }


    public function userCounts($id)
    {
      $users = DB::table('counts')
        ->select('duroodCount')
        ->join('parties', 'counts.party_id', '=', 'parties.id')
        ->where('party_id', '=', $id)
        ->sum('duroodCount');
        return response()->json($users);
    }

}
