<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use App\Models\Playlist;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showsongs()
    {
        $songs = Song::all();
        return view("songs.songs",["songs" => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view("songs.createsong", ["genres" => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            "songName" => "required",
            "songArtist" => "required",
            "songDuration" => "required|integer|min:1|max:1080",
            "songGenre" => "required|exists:genres,id"
        ]);

        Song::create([
            "name" => $request->get("songName"),
            "genre_id" => $request->get("songGenre"),
            "artist" => $request->get("songArtist"),
            "duration" => $request->get("songDuration")
        ]);
    }

    /**
     * Display the specified resource.
     */
    // public function showsongs(Song $song)
    // {
    //     $songs = Song::all();
    //     return view("songs.createplaylist", ["songs" => $songs]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
