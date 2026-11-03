@extends('layouts.app')

@section('title', 'Bootstrap Button Primary - Tailwind Recreation')

@section('content')
<div class="max-w-4xl mx-auto p-8">
    <h1 class="text-3xl font-bold mb-8 text-gray-800 dark:text-gray-100">Bootstrap btn-primary Recreation with Tailwind</h1>
    
    <div class="space-y-8">
        <!-- Normal State -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-600 dark:text-gray-300">Normal State</h2>
            <button type="button" 
                class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
                Primary Button
            </button>
        </div>

        <!-- Hover State -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-600 dark:text-gray-300">Hover State (mouse over)</h2>
            <button type="button" 
                class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
                Primary Button
            </button>
        </div>

        <!-- Focus State -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-600 dark:text-gray-300">Focus State (tab to focus)</h2>
            <button type="button" 
                class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
                Primary Button
            </button>
        </div>

        <!-- Active/Pressed State -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-600 dark:text-gray-300">Active/Pressed State (click and hold)</h2>
            <button type="button" 
                class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
                Primary Button
            </button>
        </div>

        <!-- Disabled State -->
        <div>
            <h2 class="text-lg font-semibold mb-3 text-gray-600 dark:text-gray-300">Disabled State</h2>
            <button type="button" disabled
                class="inline-block px-3 py-1.5 text-sm font-normal leading-normal text-white bg-blue-300 border border-transparent rounded-md shadow-sm hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:bg-blue-300 disabled:cursor-not-allowed transition-colors duration-150 ease-in-out">
                Primary Button
            </button>
        </div>
    </div>

    <!-- Bootstrap Reference -->
    <div class="mt-12 p-4 bg-gray-100 dark:bg-gray-800 rounded-lg">
        <h2 class="text-lg font-semibold mb-3">Bootstrap 5.3 Original Reference</h2>
        <a href="https://getbootstrap.com/docs/5.3/components/buttons/" target="_blank" 
            class="text-blue-600 hover:text-blue-800 underline">
            https://getbootstrap.com/docs/5.3/components/buttons/
        </a>
    </div>

    <!-- Implementation Notes -->
    <div class="mt-8 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
        <h2 class="text-lg font-semibold mb-3">Implementation Notes</h2>
        <ul class="list-disc list-inside space-y-1 text-sm text-gray-700 dark:text-gray-300">
            <li><strong>Color:</strong> bg-blue-600 (#2563eb) - close to Bootstrap's #0d6efd</li>
            <li><strong>Padding:</strong> px-3 py-1.5 - matches Bootstrap's 0.375rem 0.75rem</li>
            <li><strong>Font size:</strong> text-sm - matches Bootstrap's 1rem equivalent in Tailwind</li>
            <li><strong>Border radius:</strong> rounded-md - matches Bootstrap's 0.375rem</li>
            <li><strong>Font weight:</strong> font-normal - matches Bootstrap's 400</li>
            <li><strong>Hover:</strong> hover:bg-blue-700 - darker blue on hover</li>
            <li><strong>Active:</strong> active:bg-blue-800 - even darker when pressed</li>
            <li><strong>Focus:</strong> focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 - blue ring on focus</li>
            <li><strong>Disabled:</strong> disabled:bg-blue-300 disabled:cursor-not-allowed - lighter gray-blue when disabled</li>
        </ul>
    </div>
</div>
@endsection
