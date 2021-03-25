<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>温泉旅行にいこう</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="main.js"></script>

<form method="post" action="insert.php">

<div class="yesno clearfix">

    <!-- 1問目 -->
    <div id="q_01" class="positionFit">
    <h2>Question1</h2>
    <p>バス・電車だけで行きたい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#q_02_A">はい</a></li>
    <li><a class="yn_btn" href="#q_02_B">いいえ</a></li>
    </ul>
    </div>
    
    <!-- 2問目-->
    <div id="q_02_A" style="display: none;">
    <h2>Question2</h2>
    <p>とにかく静かなところへ遠出したい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#q_03_A">はい</a></li>
    <li><a class="yn_btn" href="#q_03_B">いいえ</a></li>
    </ul>
    </div>

    <div id="q_02_B" style="display: none;">
    <h2>Question2</h2>
    <p>多少遠くてもいい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#q_03_C">はい</a></li>
    <li><a class="yn_btn" href="#q_03_D">いいえ</a></li>
    </ul>
    </div>

    <!-- 3問目  -->
    <div id="q_03_A" style="display: none;">
    <h2>Question3</h2>
    <p>にごり湯に浸かりたい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_01">はい</a></li>
    <li><a class="yn_btn" href="#q_04_A">いいえ</a></li>
    </ul>
    </div>

    <div id="q_03_B" style="display: none;">
    <h2>Question3</h2>
    <p>温泉街の散策はマスト！</p>
    <ul class="button">
    <li><a class="yn_btn" href="#q_04_B">はい</a></li>
    <li><a class="yn_btn" href="#q_04_C">いいえ</a></li>
    </ul>
    </div>

    <div id="q_03_C" style="display: none;">
    <h2>Question3</h2>
    <p>遊べるスポットが周りにあってほしい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#q_04_D">はい</a></li>
    <li><a class="yn_btn" href="#q_04_E">いいえ</a></li>
    </ul>
    </div>

    <div id="q_03_D" style="display: none;">
    <h2>Question3</h2>
    <p>思い切って贅沢したい！</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_12">はい</a></li>
    <li><a class="yn_btn" href="#a_13">いいえ</a></li>
    </ul>
    </div>

    <!-- 4問目 -->
    <div id="q_04_A" style="display: none;">
    <h2>Question4</h2>
    <p>日本酒ラブ</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_02">はい</a></li>
    <li><a class="yn_btn" href="#a_03">いいえ</a></li>
    </ul>
    </div>

    <div id="q_04_B" style="display: none;">
    <h2>Question4</h2>
    <p>海派？山派？</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_04">海派</a></li>
    <li><a class="yn_btn" href="#a_05">山派</a></li>
    </ul>
    </div>

    <div id="q_04_C" style="display: none;">
    <h2>Question4</h2>
    <p>自然あふれる所がいい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_06">はい</a></li>
    <li><a class="yn_btn" href="#a_07">いいえ</a></li>
    </ul>
    </div>

    <div id="q_04_D" style="display: none;">
    <h2>Question4</h2>
    <p>海派？山派？</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_08">海派</a></li>
    <li><a class="yn_btn" href="#a_09">山派</a></li>
    </ul>
    </div>

    <div id="q_04_E" style="display: none;">
    <h2>Question4</h2>
    <p>にごり湯に浸かりたい</p>
    <ul class="button">
    <li><a class="yn_btn" href="#a_10">はい</a></li>
    <li><a class="yn_btn" href="#a_11">いいえ</a></li>
    </ul>
    </div> 
  
      <!-- 結果発表 -->
    <form method="post" action="insert.php">
    <div id="a_01" style="display: none;">
    <h2>あなたにおすすめの温泉は...</h2>
    <ul class="button01">
    <input type="submit" value="結果を見る"></ul>
    </div>
    </form>


</body>
</html>
