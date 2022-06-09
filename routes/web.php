<?php
namespace OTIFSolutions\PhpSentimentAnalysis;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
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

Route::resource('/games', 'GameController');

Route::get('/value', function () {
    return (Sentiment::make()->analyze('She is famous, but she hates others.'));
});

Route::get('/greeitngs', function () {
    return view('testviews.greetings', ['name' => 'Finn']);

});









Route::get('/fasadesview',[\App\Http\Controllers\TestController::class, 'show']);
Route::get('/profile',[\App\Http\Controllers\TestController::class, 'index']);