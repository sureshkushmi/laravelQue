<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $header ?? __('Dashboard') }}
        </h2>
        
            <h3><a href="{{ route('post.create') }}">Create Posts</a></h3>
       
    </x-slot>

    <!-- Your dashboard content goes here -->
    <div>
        <!-- Main content of the dashboard -->
    </div>
</x-app-layout>
