<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規登録') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{-- フォーム --}}
                
                <div class="flex flex-col">
                <h2 class="text-2xl font-semibold mb-4">ChatGPTを使って小説を書こう  apiに課金してないのでエラーメッセージがでるので 
                <a class="text-blue-500 hover:text-blue-600 underline"  href=" https://chat.openai.com/ ">chat.openai</a>
                にログインして小説を作ってください。
                </h2>
                <form method="POST">
    @csrf
    <div class="flex flex-col mb-4">
        <textarea rows="10" cols="50" name="sentence" class="mb-4" placeholder="例:2000文字でリンゴを含めた気持ちが明るくなるような小説を書いて">{{ isset($sentence) ? $sentence : '' }}</textarea>
        <button type="submit" class="bg-blue-500 text-white text-lg py-2 px-4 rounded-lg">ChatGPTで小説を生成する</button>
    </div>
</form>

<textarea rows="10" cols="50" name="chat_response" class="bg-gray-100 p-4 rounded-lg" placeholder="出力結果">{{ isset($chat_response) ? $chat_response : '' }}</textarea>


<div class="mt-4">
<div class="flex flex-col">
<h2 class="text-2xl font-semibold mb-5">投稿フォーム</h2>
  <!-- フォームの開始 -->
  <form method="POST" action="{{ route('chat_gpt-confirm') }}">
    @csrf
    <div class="flex flex-col items-start">
        <h2 class="text-2xl font-semibold mb-2">タイトル</h2>
        <input type="text" name="title" class="bg-gray-100 p-2 rounded-lg mb-4 w-full" placeholder="タイトルを入力してください">
        @error('title')
        <span class="text-red-500">{{ $message }}</span>
        @enderror

        <h2 class="text-2xl font-semibold mb-2">文章</h2>
        <textarea rows="10" cols="50" name="content" class="bg-gray-100 p-2 rounded-lg w-full" placeholder="文章を入力してください"></textarea>
        @error('content')
        <span class="text-red-500">{{ $message }}</span>
        @enderror

        <button type="submit" class="bg-yellow-500 text-white text-lg py-2 px-4 rounded-lg mt-4 mx-auto w-full">投稿確認画面</button>
    </div>
</form>

        <!-- フォームの終了 -->
</div>
</div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
