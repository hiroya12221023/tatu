<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ResolveController extends Controller
{
  /**
   * 入力画面表示
   * 
   * @return View
   */
  public function index(): View
  {
    return view('resolve.index');
  }
  
    public function resolve(Request $request): View
  {
    $client = OpenAI::client(config('openai.openapi_key'));
    $errorLocation = "発生したファイルの場所：\n" . $request->input('error_location');
    $errorCode = "エラーを解決するための方法を教えてください：\n" . $request->input('error_code');

    $result = $client->completions()->create([
      'model' => 'text-davinci-003',
      'prompt' => $errorLocation . "\n" . $errorCode,
      'max_tokens' => 200,
      'temperature' => 0.5,
      'n' => 1,
    ]);

    $resolve = $result->choices[0]->text;

    return view('resolve.resolve', compact('resolve'));
  }
}