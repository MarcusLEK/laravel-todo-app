<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('To Do - Create') }}
        </h2>
    </x-slot>

    <form class="py-2" action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <input type="text" name="name" placeholder="Task Name" class="rounded w-full mb-5" value="{{ old('name') ?? '' }}" required />
                <div>
                    <a href="{{ route('tasks.index') }}" class="p-3 mr-5 text-gray-900 dark:text-gray-100 bg-gray-500 rounded">Cancel</a>
                    <button type="submit" class="p-3 text-gray-900 dark:text-gray-100 bg-green-500 rounded">Create</button>
                </div>
            </div>
        </div>
    </form>
    
</x-app-layout>