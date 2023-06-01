<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">タイトル:</label>
        <input type="text" id="title" name="title" value="{{ $article->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        @error('title')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">内容:</label>
        <textarea id="content" name="content" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $article->content }}</textarea>
        @error('content')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 w-full">更新</button>
</form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>
