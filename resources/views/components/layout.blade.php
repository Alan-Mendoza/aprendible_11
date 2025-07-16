<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
</head>
<body>
    {{-- @include('partials.navigation') --}}
    <x-partials.navigation />
    @session('status')
        {{ $value }}
    @endsession
    <br>
    <a href="{{ route('posts.create') }}">Create New Post</a>
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