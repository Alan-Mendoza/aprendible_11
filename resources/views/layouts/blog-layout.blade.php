<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/scripts.js') }}"></script> --}}
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- @include('partials.navigation') --}}
    {{-- <x-partials.navigation /> --}}
    @include('layouts.blog-navigation')
    @session('status')
        <div class="bg-green-600 p-4 text-xl text-green-50 dark:bg-green-800">{{ $value }}</div>
    @endsession
    <br>
    {{-- <a href="{{ route('posts.create') }}">Create New Post</a> --}}
    @isset($sum)
        <p>{{ $sum }}</p>
    @endisset
    {{ $slot }}

    {{-- @if (isset($sidebar)) --}}
        @isset($sidebar)
            <div id="sidebar">
                <h1>Sidebar</h1>
                <div>{{ $sidebar }}</div>
            </div>
        @endisset
    {{-- @endif --}}
</body>
</html>