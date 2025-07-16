<x-layout :meta-title="$post->title" :meta-description="$post->body">
    {{-- <a href="{{ route('posts.create') }}">Create New Post</a> --}}

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}">Back</a>
</x-layout>