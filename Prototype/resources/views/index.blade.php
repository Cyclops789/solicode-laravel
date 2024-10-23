@extends('layouts.app')

@section('content')

<div class="mt-4 w-full h-full flex flex-col justify-center items-center">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-black">We sell and rent houses.</h1>
    <p class="mb-6 text-lg font-normal text-black">Your Trusted Partner for Buying, Selling, and Renting Quality Homes – Find Your Dream House Today!</p>
    <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
        Contact
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
    </a>
</div>

@endsection