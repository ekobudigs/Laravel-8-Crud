<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }} {{ Auth::user()->name }}</div>
                    <div></div>
                @endif
                @if (session()->has('successregisr'))
                    <div class="alert alert-success">{{ session()->get('successregisr') }}</div>
                    <div></div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome My Site</div>
                    <div class="card-body">
                        <p>lorem</p>
                        <p>lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
















{{-- @extends('layouts.app', ['title' => 'Home Page'])

@section('content')


    <x-app-layout></x-app-layout>

    {{-- <x-layouts.app></x-layouts.app>

    <x-alert>
        <x-slot name="title">
            header components with <strong>Tebal</strong> tag
        </x-slot>
        ini adalah slot
        @slot('footer')
            ini footer

        @endslot

    </x-alert>

    <p>Ini Adalah Halaman Beranda</p> --}}
{{-- @endsection --}}
