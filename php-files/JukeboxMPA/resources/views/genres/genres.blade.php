@extends('layouts.master')
@section('title')
    Genres
@endsection
@section('content')
    <h1>Dit zijn alle genres:</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{$genre->name}}</li>
        @endforeach
    </ul>
@endsection