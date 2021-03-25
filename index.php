<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>温泉旅行にいこう</title>
  <link href="main.css" rel="stylesheet">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
      </div>
    </nav>
  </header>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="main.js"></script>

  <h1><span>温泉旅行に行こう</span></h1>


  <form method="post" action="insert.php">
    <div>
      <label for="name">交通手段は？</label>
      <input type="radio" name="traffic-method" value="電車" checked="checked">電車
      <input type="radio" name="traffic-method" value="車">車
    </div>
    <input type="submit" class=button value="送信">
  </form>

  <img src="img/04_atami.jpg" alt="温泉の写真"><br>
  <p class="syutten">写真出典：楽天トラベル</p>
  
</body>
</html>