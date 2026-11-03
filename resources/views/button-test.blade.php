@extends('layouts.app')

@section('title', 'Bootstrap Button Primary - Tailwind Recreation')

@section('content')
<div class="min-h-screen gap-4 p-8 bg-gray-50 dark:bg-gray-900">
    <button type="button"
        class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
        Primary Button
    </button>
    <button type="button" disabled
        class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-300 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
        Disabled Button
    </button>
</div>
@endsection
