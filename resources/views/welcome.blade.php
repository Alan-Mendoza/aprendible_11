{{-- @component('components.layout') --}}
<x-layout meta-title="Home Page" meta-description="This is the home page description." >
    {{-- :sum="2 + 2" --}}
    {{-- <h1>Inicio</h1> --}}
    <div class="text-center p-4 mb-4 text-lg text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert"><span class="font-medium">Home</div>
    {{-- Forma 1 --}}
    {{-- <x-slot name="sidebar">
        Home Sidebar
    </x-slot> --}}
    {{-- Forma 2 --}}
    {{-- <x-slot:sidebar>
        Home Sidebar
    </x-slot:sidebar>  --}}
</x-layout>
{{-- @endcomponent --}}