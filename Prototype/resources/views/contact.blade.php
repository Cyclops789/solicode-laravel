@extends('layouts.app')

@section('content')





<div class="flex flex-col justify-center items-center">
    @if(session()->has('success'))
        <div class="p-4 bg-green-400 text-white rounded w-[400px]">
            {{ session()->get('success') }}
        </div>
    @endif
    <form method="POST" action="/contact" novalidate="" class="mb-4 w-[50%]">
        @csrf
        <div class="grid gap-2">
            <div class="grid gap-1">
                <label class="text-zinc-950 dark:text-white" for="name">Name</label>
                <input
                    class="mr-2.5 mb-2 h-full min-h-[44px] w-full rounded-lg border border-zinc-200 bg-white px-4 py-3 text-sm font-medium text-black focus:outline-0"
                    id="name" type="name" autocapitalize="none" autocomplete="name"
                    name="name"
                    required
                />

                <label class="text-zinc-950 dark:text-white" for="email">Email</label>
                <input
                    class="mr-2.5 mb-2 h-full min-h-[44px] w-full rounded-lg border border-zinc-200 bg-white px-4 py-3 text-sm font-medium text-black focus:outline-0"
                    id="email" type="email" autocapitalize="none"
                    name="email"
                    required
                />

                <label class="text-zinc-950 mt-2 dark:text-white" for="message">Message</label>
                <input id="message" type="text"
                    class="mr-2.5 mb-2 h-full min-h-[44px] w-full rounded-lg border border-zinc-200 bg-white px-4 py-3 text-sm font-medium text-black focus:outline-0"
                    name="message"
                    required
                />
            </div>
            
            <button class="px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900" type="submit">Send</button>
        </div>
    </form>
</div>
@endsection