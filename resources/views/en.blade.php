<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Quiz App</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        header img {
            height: 100px;
            width: auto;
            padding: 0px 200px;
        }

        header {
            position: fixed;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            border-bottom: 2px solid #000;
            z-index: 1000;
            transition: color 0.3s;
            margin-bottom: 520px;
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
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-color: transparent;
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
            padding-top: 240px;
            background-color: #79c6b6;
            text-align: center;
            padding-bottom: 100px;
        }

        .introduction img {
            height: 100px;
            width: auto;
            padding: 0px 200px;
        }

        .sentence h1 {
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
            font-size: 50px;
        }

        .introduction p {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            line-height: 3;
            color: #333;
        }

        .feature {
            padding-top: 200px;
            text-align: center;
            padding-bottom: 100px;
            background-image: url('/images/image0 (13).jpeg');
        }

        .feature-section.feature {
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
            font-size: 50px;
        }

        .how {
            padding-top: 200px;
            background-color: #D3D3D3;
            text-align: center;
            padding-bottom: 100px;
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
            font-size: 50px;
        }

        .how button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .how button:hover {
            background-color: #FFA500;
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
            background-color: orange;
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
        <a href="#overview" class="overview">Overview</a>
        <div class="separator"></div>
        <a href="#feature-section" class="features">Features</a>
        <div class="separator"></div>
        <a href="#introdction" class="tatu">How to Play</a>
        <a href="quiz" class="quizzzz">Quiz</a>
        <a href="/" class="overview">Top Page</a>
        <div class="hamburger-icon" id="hamburger-icon">
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
        </div>
    </header>

    <div class="menu" id="menu">
        <a href="#overview" class="menu-item">Overview</a>
        <a href="#feature-section" class="menu-item">Features</a>
        <a href="#introdction" class="menu-item">How to Play</a>
        <a href="quiz" class="menu-item">Quiz</a>
        <a href="/" class="menu-item">Top Page</a>
    </div>

    <div id="overview" class="introduction">
        <div class="sentence">
            <h1>This App's Introduction</h1>
        </div>
        <p>Let me ask you a question: Do you like quizzes?</br>
            Whether it's challenging your friends, solving online quiz questions, it's always fun, right?</br>
            Moreover, quizzes help you gain knowledge across various subjects.</br>
            Considering this, I developed this quiz app with a focus on making learning enjoyable.</p>
    </div>

    <div id="feature-section" class="feature">
        <div class="feature-sentence">
            <h1>This App's Features</h1>
        </div>
        <p>One of the unique features of this app is the integration of OpenAI's API.</br>
            You might have noticed that I'm using the trending ChatGPT API.</br>
            In this quiz app, we utilize ChatGPT to generate quiz questions.</br>
            What's more, we use the latest AI model, "GPT-4," ensuring high credibility, up-to-date data, and accurate quiz questions.</p>
    </div>

    <div id="introduction" class="how">
        <div class="how-sentence">
            <h1>How to Use This Quiz App</h1>
        </div>
        <p>Let me explain how to use this quiz app.</br>
            You just need to enter a word, any word you like - "Anime," "Food," "Movies," anything goes.</br>
            After that, you'll be presented with quiz questions related to that word.</br>
            Simply solve them and gain knowledge! Let's get started!</br>
            Click the button below to challenge yourself:</br>
            <form action="/quiz" method="get">
                @csrf
                <button type="submit">Take the Quiz</button>
            </form>
        </p>
    </div>

    <script>
        var hamburgerIcon = document.getElementById('hamburger-icon');
        var menu = document.getElementById('menu');

        // Toggle menu visibility when hamburger icon is clicked
        hamburgerIcon.addEventListener('click', function () {
            menu.classList.toggle('show-menu');
        });
    </script>
</body>

</html>