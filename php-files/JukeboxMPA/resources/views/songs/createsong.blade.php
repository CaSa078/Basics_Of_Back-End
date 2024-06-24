@extends('layouts.master')
@section('title')
    CreateSong
@endsection
@section('content')
    <div class="create-song">
        <form class="create-song__form" action="/songs/store" method="POST">
            @csrf
            <label class="create-song__label" for="songName">Vul hier u song naam in:</label>
            <input class="create-song__input" id="songName" type="text" name="songName">

            @error('songName')
                <p style="color:red;">{{$message}}</p>
            @enderror

            <label class="create-song__label" for="songArtist">Vul hier u song artist in:</label>
            <input class="create-song__input" id="songArtist" type="text" name="songArtist">

            @error('songArtist')
                <p style="color:red;">{{$message}}</p>
            @enderror
            <label class="create-song__label" for="genre">Selecteer een genre:</label>
            <select class="create-song__select" name="songGenre" id="">
                @foreach($genres as $genre)
                    <option class="create-song__option" value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
            </select>

            @error('songGenre')
                <p style="color:red;">{{$message}}</p>
            @enderror

            <label class="create-song__label" for="songDuration">Vul hier u song duration in:</label>
            <input class="create-song__input" id="songDuration" type="number" name="songDuration">

            @error('songDuration')
                <p style="color:red;">{{$message}}</p>
            @enderror
            
            <input class="create-song__submit" type="submit" value="Add Song">
        </form>
    </div>
@endsection
