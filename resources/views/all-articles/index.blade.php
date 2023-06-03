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
            <h2 class="text-2xl font-semibold mb-5">投稿一覧</h2>
            <div class="flex mb-3">
                            <div class="w-2/6 pr-4">
                                <p class="font-semibold title-font text-gray-700 mb-2">日付</p>
                                <p class="font-semibold title-font text-gray-700">名前</p>
                            </div>
                            <div class="w-3/6 pr-4">
                                <h3 class="text-lg font-semibold mb-2">タイトル</h3>
                                <p class="text-lg font-semibold mb-2">文章</p>
                            </div>
                            <div class="w-1/6">
                          
                            </div>
                        </div>
                    @foreach ($articles as $article)
                        <div class="flex mb-3">
                            <div class="w-2/6 pr-4">
                                <p class="font-semibold title-font text-gray-700 mb-2">{{ $article->created_at->format('d M Y') }}</p>
                                <p class="font-semibold title-font text-gray-700">{{ $article->user->name }}</p>
                            </div>
                            <div class="w-3/6  pr-4">
                                <h3 class="text-lg font-semibold mb-2">{{ $article->title }}</h3>
                                <p class="text-lg font-semibold mb-2">{{ substr($article->content, 0, 200) }}</p>
                            </div>
                            <div class="w-1/6">
                            <a href="{{ route('all-articles.show', $article->id) }}" class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0">View Details</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
