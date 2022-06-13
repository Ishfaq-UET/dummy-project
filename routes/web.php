<?php

namespace OTIFSolutions\PhpSentimentAnalysis;

use Illuminate\Support\Facades\Route;

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
Route::get('/fasadesview', [\App\Http\Controllers\TestController::class, 'show']);
Route::resource('/post', 'PostController' );
