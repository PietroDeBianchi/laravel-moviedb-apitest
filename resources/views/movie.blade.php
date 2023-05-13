{{-- link this component to app.blade.php --}}
@extends('layouts.layout')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'LaralFlix - Movie')

@section('contents')
<div id="movies-container">
    <h1>Movie List</h1>
    <ul>
        @foreach ($data['results'] as $movie)
            <li>{{ $movie['title'] }}</li>
        @endforeach
    </ul>
</div>
@endsection