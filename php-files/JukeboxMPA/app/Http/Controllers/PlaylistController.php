<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Song;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("playlists.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $songs = Song::all();
        return view("playlists.createplaylist", ["songs" => $songs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Playlist::create([
            "name" => $request->get("playlistName"),
            
            "song_id" => $request->get("playlistSong"),
        ]);

        dd("Playlist created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
