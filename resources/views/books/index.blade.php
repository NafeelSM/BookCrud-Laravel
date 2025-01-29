<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-4xl font-extrabold text-gray-900 dark:text-gray-100">
                    {{ __('Books') }}
                </h2>
                <a href="{{ route('books.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-green-500 dark:bg-green-500/100 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 dark:focus:bg-green-900 focus:outline-none active:bg-green-900 dark:active:bg-gray-300 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Create
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>

                </a>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">ISBN</th>
                        <th scope="col" class="px-6 py-3">Author</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Created_at</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->isbn }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->author }}
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit( $book->description,30) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->created_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 inline-flex">
                            <!-- SVG icons here -->
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No books found!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>
