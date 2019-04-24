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


Route::get('/', "PremierLeagueController@getLeague");
Route::get('/play-all', "PremierLeagueController@play");
Route::get('/play-week/{week}', "PremierLeagueController@playWeekly");
Route::get('/edit-strenght', "PremierLeagueController@editStrenght");
Route::prefix('api')->group(function () {
    Route::get('fixture', "PremierLeagueController@refreshFixture");
    Route::get('leauge', "PremierLeagueController@refreshLeauge");
    Route::get('reset', "PremierLeagueController@reset");
    Route::get('next-matches/{week}', "PremierLeagueController@nextMatches");
    Route::get('/play-weekly/{week}', "PremierLeagueController@playWeekly");
    Route::get('/predictions', "PremierLeagueController@predictions");
    Route::get('/update-match/{id}/{column}/{value}',"PremierLeagueController@updateMatch");
});
