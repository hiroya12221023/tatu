<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>クイズアプリ</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        
       header img {
            height: 100px;
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
   height: 100px;
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
    background-color: #79c6b6;
    margin: 4px 0;
}

 .introduction {
    padding-top: 240px; /* ヘッダーの高さと同じだけの余白を上部に追加 */
    background-color: #79c6b6;
     text-align: center;
    padding-bottom: 100px; /* 下部に余白を追加 */
    
}

.introduction img{
     height: 100px;
            width: auto; /* 幅は自動的に調整されます */
            padding: 0px 200px;
}
.sentence h1 {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 20px;
    font-size:50px;
}

.introduction p {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    line-height: 3;
    color: #333;
}
.feature {
      padding-top: 200px; /* ヘッダーの高さと同じだけの余白を上部に追加 */
     text-align: center;
    padding-bottom: 100px; /* 下部に余白を追加 */
       background-image: url('/images/image0 (13).jpeg');
    
}
.feature-section.feature{
    background-image: url('/images/image0 (13).jpeg');
}
.feature p {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    line-height: 3;
    color: #333;
}
.feature-sentence h1 {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 100px;
    font-size:50px;
}
.how {
      padding-top: 200px; /* ヘッダーの高さと同じだけの余白を上部に追加 */
   background-color: #D3D3D3;
     text-align: center;
    padding-bottom: 100px; /* 下部に余白を追加 */
}
.how p {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    line-height: 3;
    color: #333;
}
.how-sentence h1 {
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 100px;
    font-size:50px;
}

.how button {
    background-color: #4CAF50; /* 緑色 */
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* 背景色の変化をスムーズにするアニメーション */
}

/* マウスがボタン上にあるときのスタイル（オレンジ色） */
.how button:hover {
    background-color: #FFA500; /* オレンジ色 */
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
        .tatu:hover,
.quizzzz:hover,
.overview:hover {
    color: orange;
}
.hamburger-icon:hover {
    background-color: orange; /* マウスを乗せたときの背景色を変更 */
}
.menu:hover {
    color: orange;
}
    </style>
</head>
    <body>
     <header>
    <img src="{{ asset('/images/aa.png') }}" alt="あ">
    <div class="separator"></div>
    <a href="#overview" class="overview">概要</a>
    <div class="separator"></div>
   <a href="#feature-section" class="features">機能</a>
    <div class="separator"></div>
   <a href="#introdction" class="tatu">アプリの遊び方</a>
    <a href="quiz" class="quizzzz">クイズ</a>
     <a href="/" class="overview">top-page</a>
       <div class="hamburger-icon" id="hamburger-icon">
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
</header>   

<div class="menu" id="menu">
        <a href="#overview" class="menu-item">概要</a>
        <a href="#feature-section" class="menu-item">機能</a>
        <a href="#introdction" class="menu-item">アプリの遊び方</a>
        <a href="quiz" class="menu-item">クイズ</a>
        <a href="/" class="menu-item">top-page</a>
    </div>

<div  id ="overview" class="introduction">
 　<div class="sentence">
 　    <h1>This app's introduction </h1>
 　</div>
 　<p>いきなりですが皆さん「クイズ」は好きですか？</br>
 　友達とクイズを出し合ったり、ネットのクイズ問題を解いてみたりすることは楽しいですよね。</br>
 　なにより、クイズを行うことで幅広いジャンルの知識をを得ることができます。</br>
 　そこで私は楽しく教養を学べるという点でこのクイズアプリを開発しました。</br>
 　</p>
　　　 
</div>

<div id="feature-section" class="feature">
    <div class="feature-sentence">
           <h1>This app's features </h1>
    </div>
<p>このアプリの一つの特徴として、OpenAIのAPIを導入しています。</br>
皆さんもうお気づきかもしれませんが、そうです。私が導入しているのは、最近話題のChatGPTのAPIです。</br>
このクイズアプリではChatGPTを使用してクイズを行います。さらに、最新のAIモデル「GPT-4」を使用していますので、</br>
信憑性が高く・最新のデータを扱い・精度の高いクイズ問題を楽しむことが出来ます。</p>
</div>
<div id="introdction" class="how">
    <div class="how-sentence">
        <h1>How to use this quiz app</h1>
    </div>
<p>このクイズアプリの遊び方について説明します。</br>
このアプリでは単語を一つ入力します。「アニメ」「食べ物」「映画」なんでも大丈夫です。</br>
その後、その単語に関連したクイズ問題が出題されるのでそれを解いてください。実際にプレイした方がわかりやすいので</br>
早速やってみましょう！↓のボタンをクリックしてね
     <form action="/quiz" method="get">
        @csrf
        <button type="submit">クイズに挑戦する</button>
        </form>

</p>
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