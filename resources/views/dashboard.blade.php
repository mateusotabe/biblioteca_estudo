@extends('layouts.main')

@section('title', 'AeroLibrary')


@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1>AeroLibrary</h1>
    </div>
</x-app-layout>

@endsection