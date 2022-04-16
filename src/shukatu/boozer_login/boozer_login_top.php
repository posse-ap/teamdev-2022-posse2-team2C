<?php
//ちゃんとログインできてるか確認
session_start();
//セッションハイジャック防止（ページ毎にsession idをランダムに変更）
session_regenerate_id(true);
if(isset($_SESSION["login"]) === false) {
    print "ログインしていません。<br><br>";
    print "<a href='agent_login.html'>ログイン画面へ</a>";
    exit();
} else {
    print "<h1>エージェント用管理画面TOP</h1><br>" . $_SESSION["name"]."様ログイン中";
    print "<br>";
}
?>
 
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面TOP</title>
<link rel="stylesheet" href="../style.css">
</head>
    
<body>
    
<br><br>
<?php print $_SESSION["code"];
  ?><br><br>

    <a href="../staff_list.php">スタッフ管理</a>
    <br><br>
    <a href="../product/pro_add.php">エージェント管理</a>
    <br><br>
    <a href="../product/pro_list.php">エージェント一覧</a>
    <br><br>
    <a href="boozer_logout.php">ログアウト</a>
</body>
</html>