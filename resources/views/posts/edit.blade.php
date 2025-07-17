<x-app-layout :meta-title="'Editing: ' . $post->title" :meta-description="$post->body">
    {{-- <h1>{{ __('Edit Form') }}</h1> --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Form') }}
        </h2>
    </x-slot>
    {{-- @dump($post->toArray()) Para ver los datos del post --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" class="space-y-4 max-w-xl">
                        @include('posts.form-fields')
                        <x-primary-button type="submit">{{ __('Update') }}</x-primary-button>
                        @csrf
                        @method('PUT')
                    </form>
                    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>