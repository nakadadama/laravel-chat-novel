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
                <div class="mt-4">
    <div class="flex flex-col">
        <h2 class="text-2xl font-semibold mb-5">投稿確認</h2>

        <h2 class="text-2xl font-semibold mb-2">タイトル</h2>
        <p>{{ $title }}</p>

        <h2 class="text-2xl font-semibold mb-2">文章</h2>
        <p>{{ $content }}</p>

        <!-- フォームの送信ボタン -->
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <input type="hidden" name="title" value="{{ $title }}">
            <input type="hidden" name="content" value="{{ $content }}">

            <button type="submit" class="bg-yellow-500 text-white text-lg py-2 px-4 rounded-lg mt-4">投稿する</button>
        </form>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
