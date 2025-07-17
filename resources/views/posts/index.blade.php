<x-layout meta-title="Blog Page" meta-description="This is the blog page description.">
    {{-- <h1>Blog</h1> --}}
    <div class="text-center p-4 mb-4 text-lg text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert"><span class="font-medium">Blog</div>
    @auth
        <a href="{{ route('posts.create') }}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ml-2 flex justify-center">Create New Post</a>
    @endauth
        {{-- @dump($posts) --}}
    {{-- @foreach ($posts as $post) --}}
        {{-- <h2>{{ $post['title'] }}</h2> --}}
        {{-- <h2>{{ $post->title }}</h2> --}}
        {{-- <div style="display: flex; align-items: baseline;">
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
    @endforeach --}}
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($posts as $post)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 ml-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center pb-10 p-4">
                    <a href="{{ route('posts.show',['post' => $post->id]) }}" class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $post->title }}</a>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $post->body }}</span>
                    @auth
                        <div class="flex mt-4 md:mt-6">
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Edit') }}</a>
                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">{{ __('Delete') }}</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
</x-layout>