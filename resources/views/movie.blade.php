{{-- link this component to app.blade.php --}}
@extends('layouts.layout')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('title', 'LaralFlix - Movie')

@section('contents')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="flex items-center p-4 w-[920px]">
                <div class="w-3/12">
                    <img src="https://www.themoviedb.org/t/p/w220_and_h330_face{{ $data['poster_path'] }}" alt="Poster" class="rounded ">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection