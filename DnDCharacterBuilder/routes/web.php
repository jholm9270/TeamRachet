<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('DnDBuilder', function () {
    return view('DnDBuilder');
});

Route::get('Dice', function () {
    return view('Dice');
});

Route::any('DnDBuilder/{race}/Class/{class}/Dice', function ($race=null, $class=null) {
	//grab race values
	$queryResultRace = DB::select('select * from Race where Race_Name = ?', [urldecode($race)]);
	$queryResultClass = DB::select('select * from Class where Class_Name = ?', [$class]);
	$displayValues = array(
	 "Race" => $queryResultRace[0],
	 "Class" => $queryResultClass[0],
	 );
    return view('Dice',['race'=>$race],['displayValues'=>$displayValues]);
});

Route::get('DnDBuilder/{race}', function($race=null){
	$queryResult = DB::select('select * from Race where Race_Name = ?', [$race]);
	$displayValues = $queryResult[0];
	return view('DnDBuilder',['displayValues'=>$displayValues]);
});

Route::get('DnDBuilder/{race}/Class', function($race){
	
return view('Class', ['race'=>$race]);
});

Route::get('DnDBuilder/{race}/Class/{class}', function($race=null, $class=null){
	//grab race values
	$queryResultRace = DB::select('select * from Race where Race_Name = ?', [$race]);
	$queryResultClass = DB::select('select * from Class where Class_Name = ?', [$class]);
	$displayValues = array(
	 "Race" => $queryResultRace[0],
	 "Class" => $queryResultClass[0],
	 );
	//grab class values
	
	$displayValuesClass = $queryResultClass[0];
	
	return view('Class',['race'=>$race],['displayValues'=>$displayValues]);
});



Route::get('php', function () {
    return phpinfo();
});