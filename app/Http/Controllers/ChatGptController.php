<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatGptController extends Controller
{
      /**
     * index
     *
     * @param  Request  $request
     */
    public function index(Request $request)
    {

        return view('chat');
    }

    /**
     * chat
     *
     * @param  Request  $request
     */
    public function chat(Request $request)
    {
         // バリデーション
         $request->validate([
            'sentence' => 'required',
        ]);

        // 文章
        $sentence = $request->input('sentence');

        // TODO: ChatGPT API処理

        $chat_response = $this->chat_gpt("日本語で応答してください", $sentence);

        return view('chat', compact('sentence', 'chat_response'));
    }
        /**
     * ChatGPT API呼び出し
     * ライブラリ
     */
    function chat_gpt($system, $user)
    {
        
        // APIキー
        $api_key = env('CHAT_GPT_KEY');

        // パラメータ
        $data = array(
            "model" => "gpt-3.5-turbo",
            'temperature' => 0.8,
            'top_p' => 0.8,
    　　　　'top_k' => 50,
   　　　　 'repetition_penalty' => 1.5,
            "messages" => [
                [
                    "role" => "system",
                    "content" => $system
                ],
                [
                    "role" => "user",
                    "content" => $user
                ]
            ]
        );

        $openaiClient = \Tectalic\OpenAi\Manager::build(
            new \GuzzleHttp\Client(),
            new \Tectalic\OpenAi\Authentication($api_key)
        );

        try {

            $response = $openaiClient->chatCompletions()->create(
                new \Tectalic\OpenAi\Models\ChatCompletions\CreateRequest($data)
            )->toModel();

            return $response->choices[0]->message->content;
        } catch (\Exception $e) {
            return "ERROR" . $e->getMessage();
        }
       
    }


    public function confirm(Request $request)
{
    // 入力データのバリデーション
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ], [
        'title.required' => 'タイトルを入力してください。',
        'title.max' => 'タイトルは255文字以内で入力してください。',
        'content.required' => '文章を入力してください。',
    ]);

    // バリデーションを通過した場合の処理
    $title = $validatedData['title'];
    $content = $validatedData['content'];

    // 取得したデータをビューに渡して確認画面を表示
    return view('confirm', compact('title', 'content'));
}



}
