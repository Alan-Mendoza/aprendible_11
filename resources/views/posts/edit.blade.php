<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{ __('Edit Form') }}</h1>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">{{ __('Title') }}</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}"><br>
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        <br>
        <label for="body">{{ __('Body') }}</label><br>
        <textarea name="body" id="body">{{ old('body') ?? $post->body }}</textarea><br>
        @error('body') <span style="color: red;">{{ $message }}</span> @enderror
        <br>
        <button type="submit">{{ __('Update') }}</button>
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>