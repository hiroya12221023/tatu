<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズアプリ</title>
</head>
<body>
    <h1>クイズアプリ</h1>
    <form action="/generate-quiz" method="post">
        @csrf
        <input type="text" name="sentence" placeholder="問題のテキストを入力してください">
        <button type="submit">クイズを生成する</button>
    </form>
</body>
</html>