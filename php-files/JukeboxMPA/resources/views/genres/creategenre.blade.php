@extends('layouts.master')
@section('title')
    CreateGenre
@endsection
@section('content')
    <form action="/genres/store" method="POST">
        <label for="genreName">Vul hier u genre naam in:</label>
        <input id="genreName" type="text" name="genreName">
        @csrf
        <input type="submit" value="Add Genre">
@endsection