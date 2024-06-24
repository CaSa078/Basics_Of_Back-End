@extends('layouts.master')
@section('title')
    CreateGenre
@endsection
@section('content')
    <div class="create-playlist">
        <form class="create-playlist__form" action="/playlists/store" method="POST">
            @csrf
            <label class="create-playlist__label" for="playlistName">Vul hier u playlist naam in:</label>
            <input class="create-playlist__input" id="playlistName" type="text" name="playlistName">

            <label class="create-playlist__label" for="addSong">Selecteer een song:</label>
            <select class="create-playlist__select" name="addSong" id="addSong">
                @foreach($songs as $song)
                    <option class="create-playlist__option" value="{{$song->id}}">{{$song->name}}</option>
                @endforeach
            </select>

            <input class="create-playlist__submit" type="submit" value="Add Playlist">
        </form>
    </div>
@endsection