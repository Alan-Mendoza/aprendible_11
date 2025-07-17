<x-layout meta-title="Create New Post" meta-description="Create a new blog post">
    <h1>Create New Post</h1>
    {{-- @dump($errors->all()) --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}"><br>
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        <br>
        <label for="body">Body</label><br>
        <textarea name="body" id="body">{{ old('body') }}</textarea><br>
        @error('body') <span style="color: red;">{{ $message }}</span> @enderror
        <br>
        <button type="submit">Create Post</button>
    </form>
</x-layout>