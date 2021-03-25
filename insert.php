<?php
//1. POSTデータ取得
//入力チェック（受信確認処理追加）
$trafficMethod = $_POST["traffic-method"];
// var_dump($trafficMethod);
//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
    $pdo = new PDO('mysql:dbname=onsen_db; charset=utf8; host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DbConnectError:' . $e->getMessage());
}
$sql = "";
if($trafficMethod === "電車") {
    // 電車移動が楽な静岡県熱海温泉をおススメする。
    $sql = "SELECT * FROM a_table WHERE id = 4;";
}elseif ($trafficMethod === "車") {
    // 車移動が長い群馬県万座温泉をオススメする。そのために DB から「群馬県万座温泉」を取得するための SQL を用意する。
    $sql = "SELECT * FROM a_table WHERE id = 10;";
}

// var_dump($sql);

//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
// var_dump($status);
//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
} else {
    //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";
        $view .= $result["name"] . "温泉（";
        $view .= $result["pref"] . "）がオススメ！！"."<br>";
        $view .= "交通手段"."　". $result["access"] . "<br>"."<br>";
        $view .= $result["comment"] ;
        $view .= "</p>";
        // var_dump($view);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>結果表示</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body id="main">
    <!-- Main[Start] $view-->
    <div>
        <?= $view ?>
    </div>
    <!-- Main[End] -->

</body>
</html>