<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class GameController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index() {
        $games = Game::all();

        return view('index', compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create() {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $show = Game::create($validatedData);

        return redirect('/games')->with('success', 'Game is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id) {
        $game = Game::findOrFail($id);

        return view('edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required'
        ]);
        Game::whereId($id)->update($validatedData);

        return redirect('/games')->with('success', 'Game Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id) {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/games')->with('success', 'Game Data is successfully deleted');
    }
}