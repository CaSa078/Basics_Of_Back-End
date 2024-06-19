@extends('layouts.master')
@section('title')
    CreateSong
@endsection
@section('content')
    <form action="/songs/store" method="POST">
        <label for="songName">Vul hier u song naam in:</label>
        <input id="songName" type="text" name="songName">

        <label for="songArtist">Vul hier u song artist in:</label>
        <input id="songArtist" type="text" name="songArtist">

        <select name="genre_id" id="">
            @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>

        <label for="songDuration">Vul hier u song duration in:</label>
        <input id="songDuration" type="number" name="songDuration">
        @csrf
        <input type="submit" value="Add Song">
@endsection