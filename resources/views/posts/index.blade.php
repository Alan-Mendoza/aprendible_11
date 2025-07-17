<x-blog-layout meta-title="Blog Page" meta-description="This is the blog page description.">
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

    {{-- <div x-data="{ isOpen: false }" class="relative flex justify-center">
    <button @click="isOpen = true" class="px-6 py-2 mx-auto tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        Open Modal
    </button>

    <div x-show="isOpen" 
        x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave="transition duration-150 ease-in"
        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
        class="fixed inset-0 z-10 overflow-y-auto" 
        aria-labelledby="modal-title" role="dialog" aria-modal="true"
    >
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl rtl:text-right dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>

                    <div class="mt-2 text-center">
                        <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">Archive Project</h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Aspernatur dolorum aliquam ea, ratione deleniti porro officia? Explicabo
                            maiores suscipit.
                        </p>
                    </div>
                </div>

                <div class="mt-5 sm:flex sm:items-center sm:justify-between">
                    <a href="#" class="text-sm text-blue-500 hover:underline">Learn more</a>

                    <div class="sm:flex sm:items-center ">
                        <button @click="isOpen = false" class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:mt-0 sm:w-auto sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                            Cancel
                        </button>

                        <button class="w-full px-4 py-2 mt-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:w-auto sm:mt-0 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                            Archive
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</x-blog-layout>