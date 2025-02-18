<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showgenres(){
        $genres = Genre::all();
        return view("genres.genres", ["genres" => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("genres.creategenre");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            "genreName" => "min:3|string|unique:genres,name|required"
        ]);

        Genre::create([
            "name" => $request->get("genreName")
        ]);

        dd("Genre created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
