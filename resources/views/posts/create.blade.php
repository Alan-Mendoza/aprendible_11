<x-layout meta-title="Create New Post" meta-description="Create a new blog post">
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}"><br>

        <label for="body">Body</label><br>
        <textarea name="body" id="body">{{ old('body') }}</textarea><br>

        <button type="submit">Create Post</button>
    </form>
</x-layout>