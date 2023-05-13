{{-- link this component to app.blade.php --}}
@extends('layouts.layout')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'LaralFlix')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
    <div id="home-container">
        <H1>All Movies in LARAFLIX</H1>
    </div>
@endsection