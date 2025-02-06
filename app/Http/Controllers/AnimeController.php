<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $episodeNumber = null)
    {
        $anime = Catalog::find($id);
        $genres = $anime->genres;
        $videos = $anime->videos;

        \Log::info('Videos:', $videos->toArray());

    if ($videos->isEmpty()) {
        abort(404, 'Серии не найдены');
    }

    if ($episodeNumber === null) {
        $currentVideo = $videos->first();
    } else {
        $currentVideo = $videos->where('number', $episodeNumber)->first();
    }

    if (!$currentVideo) {
        abort(404, 'Серия не найдена');
    }

    // Логирование текущего видео
    \Log::info('Current Video:', $currentVideo->toArray());

    return view('anime', compact('anime', 'genres', 'videos', 'currentVideo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
