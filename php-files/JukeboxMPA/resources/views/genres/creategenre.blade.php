@extends('layouts.master')
@section('title')
    CreateGenre
@endsection
@section('content')
    <div class="create-genre">
        <form class="create-genre__form" action="/genres/store" method="POST">
            @csrf
            <label class="create-genre__label" for="genreName">Vul hier u genre naam in:</label>
            <input class="create-genre__input" id="genreName" type="text" name="genreName">
            @error('genreName')
                <p style="color:red;">{{$message}}</p>
            @enderror
            <input class="create-genre__submit" type="submit" value="Add Genre">
        </form>
    </div>
@endsection
