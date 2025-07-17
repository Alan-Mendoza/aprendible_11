<x-layout meta-title="Blog Page" meta-description="This is the blog page description.">
    <h1>Blog</h1>
    {{-- @dump($posts) --}}
    @foreach ($posts as $post)
        {{-- <h2>{{ $post['title'] }}</h2> --}}
        {{-- <h2>{{ $post->title }}</h2> --}}
        <div style="display: flex; align-items: baseline;">
            <h2>
                <a href="{{ route('posts.show',['post' => $post->id]) }}">{{ $post->title }}</a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">{{ __('Edit') }}</a>
            &nbsp;
            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">{{ __('Delete') }}</button>
            </form>
        </div>
    @endforeach
</x-layout>