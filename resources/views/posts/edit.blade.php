<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{ __('Edit Form') }}</h1>
    {{-- @dump($post->toArray()) Para ver los datos del post --}}
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('posts.form-fields')
        <button type="submit">{{ __('Update') }}</button>
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>