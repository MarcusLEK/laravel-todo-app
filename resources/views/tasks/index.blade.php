<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('To Do') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a class="p-6 bg-white shadow-sm sm:rounded-lg" href="{{ route('tasks.create') }}">Create</a>
            </div>
        </div>
    </div>

    @forelse ($tasks as $task)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between">
                        <span>{{ $task->name }}</span>
                        <form action="{{ route('tasks.destroy', [$task->getRouteKey()]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500" onclick="return confirm('Are you sure you want to delete? You cannot revert this.')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        There are no tasks...
                    </div>
                </div>
            </div>
        </div>
    @endforelse
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-2 text-end">
                {{ $tasks->links() }}
            </div>
        </div>
    </div>
    
</x-app-layout>