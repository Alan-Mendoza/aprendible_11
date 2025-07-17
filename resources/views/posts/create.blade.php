<x-layout meta-title="Create New Post" meta-description="Create a new blog post">
    <h1>{{ __('Create New Post') }}</h1>
    {{-- @dump($errors->all()) --}}
    {{-- @dump($post->toArray()) Para ver los datos del post --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">{{ __('Send') }}</button>
    </form>
</x-layout>