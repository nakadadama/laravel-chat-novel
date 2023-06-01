<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ArticlesController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $article = new Article;
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->user_id = $user->id; // ユーザーのIDを設定
        $article->save();

        $url = route('articles.index', ['user' => $user->id]);

        return redirect($url);
    }

   
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $articles = Article::where('user_id', $user->id)->latest()->get();
    
            return view('articles.index', compact('articles', 'user'));
        }
    
        return view('articles.index'); // ログインしていない場合の表示
    }
    

    public function destroy($id)
{
    $article = Article::findOrFail($id);
    $article->delete();

    return redirect()->route('articles.index')->with('success', '投稿が削除されました');
}

public function edit($id)
{
    $article = Article::findOrFail($id);
    return view('articles.edit', ['article' => $article]);
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ], [
        'title.required' => 'タイトルを入力してください。',
        'title.max' => 'タイトルは255文字以内で入力してください。',
        'content.required' => '内容を入力してください。',
    ]);

    $article = Article::findOrFail($id);
    $article->title = $validatedData['title'];
    $article->content = $validatedData['content'];
    $article->save();

    return redirect()->route('articles.index')->with('success', '投稿が更新されました');
}



}
