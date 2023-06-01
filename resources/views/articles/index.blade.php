<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('個人投稿') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="mt-4">
       

        @if (empty($articles))
    <p>投稿はありません。</p>
@else
    <h2 class="text-2xl font-semibold mb-5">{{ $user->name }} の投稿一覧</h2>

    <ul class="border-collapse divide-y divide-gray-100">
  @foreach ($articles as $article)
    <li class="py-8 flex flex-wrap md:flex-nowrap">
      <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
        <span class="font-semibold title-font text-gray-700">{{ $article->created_at->format('d M Y') }}</span>
      </div>
      <div class="md:flex-grow">
        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $article->title }}</h2>
        <p class="leading-relaxed">{{ \Illuminate\Support\Str::limit($article->content, 100) }}</p>
        <div class="flex items-center mt-4">
          <a href="{{ route('articles.edit', $article->id) }}" class="text-indigo-500 inline-flex items-center">更新する
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="ml-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 inline-flex items-center">削除
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 3h18v18H3zM8.5 8h7M6.5 12h11M8.5 16h7"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </li>
  @endforeach
</ul>


@endif

    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
