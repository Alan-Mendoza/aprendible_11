<x-app-layout meta-title="Create New Post" meta-description="Create a new blog post">
    {{-- <h1>{{ __('Create New Post') }}</h1> --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Post') }}
        </h2>
    </x-slot>
    {{-- @dump($errors->all()) --}}
    {{-- @dump($post->toArray()) Para ver los datos del post --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4 max-w-xl">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" hidden> --}}
                        @include('posts.form-fields')
                        <x-primary-button type="submit">{{ __('Send') }}</x-primary-button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>