<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズアプリ</title>
       <link rel="stylesheet" href="{{ asset('css/hiro.css') }}">
       
    <style>
      body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       background-color: #E6E6FA; /* 薄い紫色の背景色 */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
}

h1, h2, h3 {
    color: #333; /* 見出しのテキスト色を変更 */
}

a {
    text-decoration: none; /* リンクの下線を削除 */
    color: #007BFF; /* リンクのテキスト色を変更 */
    transition: color 0.3s ease; /* リンクの色が変わるアニメーションを追加 */
}

a:hover {
    color: #0056b3; /* ホバー時のリンクのテキスト色を変更 */
}

 .quiz {
       background-color: #D3D3D3; /* 薄い鼠色の背景色 */
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin-top: 100px;
    text-align: center;
    width: 80%;
    max-width: 600px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding-top: 10px; /* 正しいプロパティ名を使用 */
}
.tomo {
              background-color: #79c6b6;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin-top: 100px;
    text-align: center;
    width: 80%;
    max-width: 600px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding-top: 10px; /* 正しいプロパティ名を使用 */
}







.quiz input[type="text"] {
    width: calc(100% - 22px); /* テキスト入力フィールドの幅を調整 */
    height: 40px;
    font-size: 18px;
    margin-bottom: 20px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* paddingとborderを要素の幅に含める */
}

.quiz button {
    width: 100%;
    height: 50px;
    font-size: 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}


.quiz button:hover {
    background-color: #FFA500; /* オレンジ色に変化 */
}

   header img {
            height: 60px;
            width: auto; /* 幅は自動的に調整されます */
            padding: 0px 200px;
        }

       header {
    position: fixed;
    display: flex; /* 横並びにするために追加 */
  justify-content: space-around; /* 子要素を均等に配置 */
    align-items: center;
    width: 100%; /* 画面幅いっぱいに広げる */
    border-bottom: 2px solid #000;
    padding:-30px -100px;
    z-index: 1000;
    transition: color 0.3s;
    margin-bottom: 520px; /* 下部に余白を追加 */
   background-color: white;
   height:60px;
}

        .header-text {
            margin-right: 10px;
            border-bottom: 1px solid #000;
        }
    .separator {
            border-bottom: 1px solid #000;
            margin: 0 0px;
        }
        

        .header-text:hover,
        .quiz:hover,
        .overview:hover,
        .features:hover {
            color: orange;
            cursor: pointer;
        }
        .element {
    background-image: url('path/to/your/image.jpg'); /* 画像ファイルのパスを指定します */
    background-size: cover; /* 画像を要素に合わせて表示する */
    background-repeat: no-repeat; /* 画像を繰り返し表示しない */
    background-position: center center; /* 画像を中央に配置する */
    background-color: transparent; /* 背景色を透明にする（画像が表示されない場所の背景色） */
}
.hamburger-icon {
    cursor: pointer;
}

.hamburger-line {
    width: 30px;
    height: 4px;
    background-color: #000;
    margin: 4px 0;
}

.menu {
            display: none;
            position: fixed;
            top: 60px;
            left: 0;
            background-color: white;
            width: 100%;
            padding: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .menu.show-menu {
            display: block;
        }

        .menu a {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            color: #007BFF;
        }

        .menu a:hover {
            color: #0056b3;
        }

.quizzzz:hover,
.overview:hover {
    color: orange;
}
.hamburger-icon:hover {
    background-color: orange; /* マウスを乗せたときの背景色を変更 */
}
.tatu:hover,
.quizzzz:hover,
.overview:hover {
    color: orange;
}
    </style>
    </head>
    <body>
    <header>
    <img src="{{ asset('/images/aa.png') }}" alt="あ">
    <div class="separator"></div>
    <a href="/#overview" class="overview">概要</a>
    <div class="separator"></div>
   <a href="/#feature-section" class="features">機能</a>
    <div class="separator"></div>
   <a href="/#introdction" class="tatu">アプリの遊び方</a>
    <a href="quiz" class="quizzzz">クイズ</a>
     <a href="/" class="overview">top-page</a>
       <div class="hamburger-icon" id="hamburger-icon">
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
</header>   

<div class="menu" id="menu">
        <a href="/#overview" class="menu-item">概要</a>
        <a href="/#feature-section" class="menu-item">機能</a>
        <a href="/#introdction" class="menu-item">アプリの遊び方</a>
        <a href="quiz" class="menu-item">クイズ</a>
        <a href="/" class="menu-item">top-page</a>
    </div>
    
      <div class="tomo">  <h2>どんなジャンルでもいいので、単語を一つ入力してください</h2></div>
        <div class="quiz">
        <form action="/generate-quiz" method="post">
            @csrf
            <input type="text" name="sentence" placeholder="例：アニメ">      <button type="submit">クイズを生成する</button>
        </form>
    </div>
    <script>
    var hamburgerIcon = document.getElementById('hamburger-icon');
var menu = document.getElementById('menu');

// ハンバーガーアイコンがクリックされたときの処理
hamburgerIcon.addEventListener('click', function() {
    // メニューの表示/非表示を切り替える
    menu.classList.toggle('show-menu');
});
</script>
    </body>
    </html>