<x-app-layout title="About">

    @slot('styles')
    <style>
        body{
            background-color: indigo;
        }
    </style>
        
    @endslot
    {{-- @section('styles')
    <style>
        body{
            background-color: indigo;
        }
    </style>
        
    @endsection --}}
    <h1>About</h1>
</x-app-layout>
