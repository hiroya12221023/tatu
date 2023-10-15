<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class ArticleGeneratorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->title == null) {
            return;
        }

        $title = $request->title;

        // .env ファイルから API キーを取得
        $apiKey = env('OPENAI_API_KEY');

        // OpenAI クライアントの作成
        $client = OpenAI::client($apiKey);

        // OpenAI API へのリクエストを行うコードをここに追加

        $result = $client->completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'prompt' => sprintf('Write article about: %s', $title),
        ]);

        $content = trim($result['choices'][0]['text']);

        // 以下のコードで $content をビューに渡すなどの処理を行う

        return view('write', compact('title', 'content'));
    }
}