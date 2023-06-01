<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-semibold mb-5">投稿詳細</h2>
                    <div class="flex mb-3">
                        <div class="w-1/4 pr-4">
                            <p class="font-semibold title-font text-gray-700 mb-2">{{ $article->created_at->format('d M Y') }}</p>
                            <p class="font-semibold title-font text-gray-700">{{ $article->user->name }}</p>
                        </div>
                        <div class="w-3/4">
                            <h3 class="text-lg font-semibold mb-2">{{ $article->title }}</h3>
                            <p class="text-lg font-semibold">{{ $article->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
