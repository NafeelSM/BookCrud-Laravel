<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 p-4">
            {{-- <x-amber-btn-link :href="route('books.index')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 4.5-7.5 7.5 7.5 7.5"></path>
                </svg>
                Back
            </x-amber-btn-link> --}}

            <div class="w-full mx-auto bg-white dark:bg-gray-800 shadow-md rounded-md overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $book->title }}</h2>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">{{ $book->body }}</p>
                </div>
                <div class="flex justify-end p-4 bg-gray-100 dark:bg-gray-700">

                    <x-cyan-btn-link class="mr-2" :href="route('books.edit', $book)">
                        Edit
                    </x-cyan-btn-link>

                    <form method="POST" action="{{ route('books.destroy', $book) }}">
                        @csrf
                        @method('delete')
                        <x-danger-button onclick="return confirm('Are you sure, you want to delete this Book?')">
                            Delete
                        </x-danger-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
