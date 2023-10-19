<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    
    
    public function showQuizForm()
    {
        return view('quiz.form');
    }
    
public function generateQuiz(Request $request)
    {
        $userInput = $request->input('sentence');

        // 問題文を生成するAPIリクエスト用のメッセージデータを構築
        $questionMessages = [
            ["role" => "system", "content" => "You are a helpful assistant."],
         ["role" => "user", "content" => "{{ $userInput }}に関連するクイズ問題文を一つ作成してください。さらに回答を四つでそのうちの正解は一つだけ作成してください。出力する際に最初は問題文、半角スペースを付けて次に解答１また半角スペースをつけて解答２また半角スペースをつけて解答３また半角スペースをつけて解答４にしてください。ただし、解答番号と回答の間に空白は入れないでください"]
        ];

        // 問題文を生成するAPIリクエスト
        $questionResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post(env('OPENAI_API_ENDPOINT'), [
            'messages' => $questionMessages,
            'model' => 'gpt-4', // モデルを指定
        ]);

        $questionApiResponse = json_decode($questionResponse->body(), true);
        $quizQuestion = $questionApiResponse['choices'][0]['message']['content'];

        // データベースに問題文を保存
        $quiz = QuizQuestion::create([
            'question' => $quizQuestion,
            'openai_response' => $questionApiResponse, // OpenAIのレスポンスを保存
        ]);
        
         DB::beginTransaction();

    try {
        $quiz = QuizQuestion::create([
            'question' => $quizQuestion,
            'openai_response' => $questionApiResponse,
        ]);
        

        DB::commit();
    } catch (\Exception $e) {
        // エラーが発生した場合はロールバック
        DB::rollback();
        throw $e;
    }
    $displayArray = explode(' ',$quizQuestion);

        return view('quiz.question', compact('quizQuestion', 'quiz','displayArray' ));
    }

    // 他のメソッドやロジックもここに追加できます
  public function showAnswer()
{
    // データベースからクイズ情報を取得（最後に保存されたもの）
    $quiz = QuizQuestion::latest('created_at')->first();

    // もし$quizが存在する場合にのみ問題文を取得
    $quizQuestion = $quiz ? $quiz->question : 'クイズが見つかりませんでした';

    // OpenAIに答えを尋ねるAPIリクエスト
    $answerMessages = [
        ["role" => "system", "content" => "You are a helpful assistant."],
        ["role" => "user", "content" => "   $quizQuestion の正解を教えてください。日本語でお願いします"]
    ];

    $answerResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
    ])->post(env('OPENAI_API_ENDPOINT'), [
        'messages' => $answerMessages,
        'model' => 'gpt-4',
    ]);

    $answerApiResponse = json_decode($answerResponse->body(), true);
    $quizAnswer = $answerApiResponse['choices'][0]['message']['content'];

    return view('quiz.result', compact('quizAnswer', 'quizQuestion'));
}
}

