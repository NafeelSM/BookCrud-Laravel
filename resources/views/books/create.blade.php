<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-4 lg:px-8 p-4">
            <form method="post" action="{{ route('books.store') }}" class="mt-6 space-y-6">
                @csrf
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus autocomplete="title" />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>
                <div>
                    <x-input-label for="author" :value="__('Author')" />
                    <x-textarea-input name='author' class="mt-1 block w-full">{{ old('author')}}</x-textarea-input>
                    <x-input-error class="mt-2" :messages="$errors->get('author')" />
                </div>


                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Create') }}</x-primary-button>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
