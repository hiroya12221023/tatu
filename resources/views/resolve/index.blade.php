<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>入力画面 | {{ config('app.name') }}</title>
</head>

<body class="bg-gray-100">
  <div class="flex flex-col justify-center items-center h-screen">
    <div class="max-w-md w-full px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
      <h1 class="text-3xl font-extrabold text-gray-900 text-center mb-8">{{ config('app.name') }}</h1>
   <form method="POST" action="{{ route('resolve') }}" class="space-y-6">
        @csrf
        <div>
          <label class="block text-gray-700 font-bold mb-2" for="error_location">
            エラー箇所
          </label>
          <textarea class="form-textarea border-2 rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400" id="error_location" name="error_location" rows="5" required></textarea>
        </div>
        <div>
          <label class="block text-gray-700 font-bold mb-2" for="error_code">
            エラーコード
          </label>
          <textarea class="form-textarea border-2 rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400" id="error_code" name="error_code" rows="5" required></textarea>
        </div>
        <div class="flex justify-center">
          <button class="w-full text-center py-2 px-4 border border-transparent rounded-md shadow-sm text-white font-medium bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400" type="submit">
            解決する
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>