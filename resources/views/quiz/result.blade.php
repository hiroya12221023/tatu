<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズアプリ</title>
    <link rel="stylesheet" href="/hiro/blog/public/css/hiro.css">
     <style>
        body {
            font-family: Arial, sans-serif;
      background-color: #E6E6FA; /* 薄い紫色の背景色 */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .yes {
            text-align: center;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            background-color: #4CAF50;
            color: white;
        }
         .hello {
            text-align: center;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            background-color: #FFFFCC; /* 薄い黄色の背景色 */
            color: white;
         }

        .hello p {
            font-size: 18px;
            margin-top: 20px;
               color: black; /* テキストの色を黒色に設定 */
        }

.oda p{
               color: black; /* テキストの色を黒色に設定 */
                  text-align: center; /* ボタン内のテキストを中央寄せにする */
}
.oda {
    display: flex;
    gap: 10px; /* ボタン間の間隔を設定 */
}

.oda form {
    margin-bottom: 20px; /* ボタン間の縦のスペースを追加 */
}

.oda button {
    display: flex;
    width: 180px; /* ボタンの幅を指定 */
    height: 70px; /* ボタンの高さを指定 */
    font-size: 20px; /* ボタンのフォントサイズを指定 */
 background-color: #D3D3D3; /* 薄い鼠色の背景色 */
    color: red; /* ボタンのテキスト色を白に設定 */
    border: none; /* ボーダーをなしに設定 */
    border-radius: 5px; /* ボタンの角を丸くする */
    cursor: pointer; /* ボタンにポインターを表示 */
    transition: background-color 0.3s ease; /* 背景色の変化をアニメーション化 */
     text-align: center; /* ボタン内のテキストを中央寄せにする */
}

.oda button:hover {
    background-color: #FFA500; /* マウスが乗ったときの背景色をオレンジに変化 */
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
    padding: 0px -100px;
    z-index: 1000;
    transition: color 0.3s;
    margin-bottom: 520px; /* 下部に余白を追加 */
   background-color: white;
   heigit:60px;
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
            color: #ff0000;
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
        quizzzz:hover,
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
.menu-item:hover {
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
   <a href="/#feature-section" class="tatu">機能</a>
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
    <div class="yes">
        <h2>回答：{{ $quizAnswer }}</h2>
    </div>

    <div class="hello">
        <p>どうですか？あなたが考えた解答と会っていましたか？<br>
            このクイズでは何度でも挑戦できるので、繰り返しクイズを行い<br>
            楽しみながら、幅広いジャンルの教養を身につけましょう！</p>
    </div>

   <div class="oda" >
    <form action="/quiz" method="get">
        <button type="submit"><p>次のクイズに進む</p></button>
    </form>
     <form action="/" method="get">
        <button type="submit"><p>top-pageに戻る</p></button>
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