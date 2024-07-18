<!-- resources/views/posts/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white border-b border-gray-200">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="5" class="form-textarea rounded-md shadow-sm mt-1 block w-full" required></textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-red-500 font-bold py-2 px-4 rounded">
    {{ __('Save Post') }}
</button>

            </div>
        </form>
    </div>
</x-app-layout>
