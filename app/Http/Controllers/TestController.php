<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller {
    public function index() {

        return View::first(['testviews.profile', 'greetings'], $data);

    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(Game $game) {
        return View::make('testviews.greetings', ['name' => 'James']);

    }

    public function edit(Game $game) {
        //
    }

    public function update(Request $request, Game $game) {
        //
    }

    public function destroy(Game $game) {
        //
    }
}