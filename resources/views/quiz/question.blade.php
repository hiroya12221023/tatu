<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズアプリ</title>
</head>

<body>
    <h1>クイズアプリ</h1>
    <h2>問題：</h2>
    <p>{{ $quizQuestion }}</p>
    <form action="/show-answer" method="post">
        @csrf
        <button type="submit">答えを表示する</button>
    </form>
</body>

</html>