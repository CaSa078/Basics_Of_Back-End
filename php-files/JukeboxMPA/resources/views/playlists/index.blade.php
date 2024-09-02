@extends('layouts.master')
@section('title')
    Playlist
@endsection
@push('styles')
    <link rel="stylesheet" href="css/style.css">
@endpush

@section('content')
    <h1>welkom op mijn jukebox pagina met playlists</h1>
    <ul>
        @foreach($playlists as $playlist)
            <li>{{$playlist->name}}</li>
            @foreach($playlist->songs as $song)
                <li>- {{$song->name}}</li>
            @endforeach
        @endforeach
    </ul>
@endsection