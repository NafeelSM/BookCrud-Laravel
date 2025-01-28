<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-4 lg:px-8 p-4">


            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-6 space-y-6">
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
                    @forelse ($books as $book )

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->title}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->isbn }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->author}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->description}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->created_at}}
                        </td>
                        <td class="px-6 py-4">
                            Edit/Delete
                        </td>
                    </tr>

                    @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" colspan="4" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                            No Note found!
                        </th>
                    </tr>

                    @endforelse

                </tbody>
            </table>


        </div>
    </div>
</x-app-layout>
