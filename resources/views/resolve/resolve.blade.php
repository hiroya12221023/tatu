<!DOCTYPE html>
<html>

<head>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>解決画面 | {{ config('app.name') }}</title>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
  <div class="hero min-h-screen bg-gray-100">
    <div class="flex flex-col justify-center items-center pt-6">
      <h1 class="text-3xl font-bold text-gray-800">{{ config('app.name') }}</h1>
    </div>
    <div class="container px-4 md:px-0 max-w-full mx-auto pt-8 md:pt-16">
      <div class="flex flex-wrap -mx-4 justify-center">
        <div class="w-11/12 px-4 mb-8">
          <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">解決方法</h2>
            <p class="text-lg font-medium text-gray-600">{{ $resolve }}</p>
            <div class="mt-4 flex justify-center">
              <a href="{{ route('index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">戻る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>