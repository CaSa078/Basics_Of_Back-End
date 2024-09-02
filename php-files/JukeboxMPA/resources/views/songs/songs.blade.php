@extends('layouts.master')
@section('title')
    Songs
@endsection
@section('content')
    <h1>welkom op mijn jukebox pagina met songs</h1>
    <ul>
        @foreach($songs as $song)
            <li>{{$song->name}} - genre: {{$song->genre->name}}</li>
        @endforeach
    </ul>
@endsection
