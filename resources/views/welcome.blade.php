{{-- @component('components.layout') --}}
<x-layout meta-title="Home Page" meta-description="This is the home page description." :sum="2 + 2">
    <h1>Inicio</h1>
    {{-- Forma 1 --}}
    {{-- <x-slot name="sidebar">
        Home Sidebar
    </x-slot> --}}
    {{-- Forma 2 --}}
    <x-slot:sidebar>
        Home Sidebar
    </x-slot:sidebar> 
</x-layout>
{{-- @endcomponent --}}