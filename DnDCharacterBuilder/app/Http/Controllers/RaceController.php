<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaceController extends Controller
{
	public function showRace($Race){
    $queryResult = DB::select('select * from Race where Race_Name = ?', [$race]);
	//$results = DB::table('Race')-> select('*')-> where('Race_Name','=',$race);
	$displayValues = array();
	foreach($queryResult as $result){
		$displayValues[] = $result;
	}
	//return $displayValues;
	return view('DnDBuilder',['displayValues'=>$displayValues]);
} 
	}
