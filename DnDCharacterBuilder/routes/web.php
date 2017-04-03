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

Route::get('DnDBuilder/{race}', function($race=null){
	$queryResult = DB::select('select * from Race where Race_Name = ?', [$race]);
	//$results = DB::table('Race')-> select('*')-> where('Race_Name','=',$race);
	$displayValues = $queryResult[0];
	//foreach($queryResult as $result){
		//$displayValues[] = $result;
	//}
	//return $displayValues;
	return view('DnDBuilder',['displayValues'=>$displayValues]);
});



Route::get('php', function () {
    return phpinfo();
});