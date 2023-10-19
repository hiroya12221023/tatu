<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クイズアプリ</title>
    
    <style>
     header img {
            height: 40px;
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
   height: 40px;
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

 body {
      background-color: #E6E6FA; /* 薄い紫色の背景色 */
            margin: 0;
            padding: 0;
        }

        .container {
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
              padding-top: 130px; /* ヘッダーの高さと同じだけの余白を上部に追加 */
        }

        .question {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .options {
            display: flex;
            flex-direction: column;
        }

        .option {
           background-color: #FFFFCC; /* 薄い黄色の背景色 */
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .option:hover {
            background-color: orange;
        }

        .highlight {
            font-weight: bold;
            color: #ff4500;
        }

        .answerdisplay {
            margin-top: 20px;
        }

        .answerdisplay form {
    display: flex;
    align-items: center;
}

.answerdisplay button {
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.answerdisplay p {
    margin-left: 10px; /* ボタンとの間隔を調整 */
    color: yellow; /* テキストの色を白色に設定 */
}

        .answerdisplay button:hover {
    background-color: #ff6600; /* マウスホバー時の背景色をオレンジ色に変更 */
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
  <div class="container">
        <div class="question">
            問題：{{ $displayArray[0] }}
        </div>

        <div class="options">
            <div class="option" onclick="redirectToAnswer('{{ $displayArray[1] }}')">
                <span class="highlight"></span>{{ $displayArray[1] }}
            </div>
            <div class="option" onclick="redirectToAnswer('{{ $displayArray[2] }}')">
                <span class="highlight"></span>{{ $displayArray[2] }}
            </div>
            <div class="option" onclick="redirectToAnswer('{{ $displayArray[3] }}')">
                <span class="highlight"></span>{{ $displayArray[3] }}
            </div>
            <div class="option" onclick="redirectToAnswer('{{ $displayArray[4] }}')">
                <span class="highlight"></span>{{ $displayArray[4] }}
            </div>
        </div>

        <div class="answerdisplay">
            <form action="/show-answer" method="post">
                @csrf
                <button type="submit">答えを表示する</button>
            </form>
        </div>
    </div>

    <script>
    
    var hamburgerIcon = document.getElementById('hamburger-icon');
var menu = document.getElementById('menu');

// ハンバーガーアイコンがクリックされたときの処理
hamburgerIcon.addEventListener('click', function() {
    // メニューの表示/非表示を切り替える
    menu.classList.toggle('show-menu');
});
       function redirectToAnswer(answer) {
    // 新しいフォーム要素を作成
    var form = document.createElement('form');
    form.method = 'POST';
    form.action = '/show-answer';

    // CSRFトークンを追加
    var csrfToken = document.createElement('input');
    csrfToken.type = 'hidden';
    csrfToken.name = '_token';
    csrfToken.value = '{{ csrf_token() }}';
    form.appendChild(csrfToken);

    // フォームに選択された答えを追加
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'selectedAnswer';
    input.value = answer;
    form.appendChild(input);

    // フォームをbodyに追加し、自動的に送信する
    document.body.appendChild(form);
    form.submit();
}
    </script>
</body>

</html>