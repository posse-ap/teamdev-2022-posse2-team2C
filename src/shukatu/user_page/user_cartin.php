<?php
//ログインチェックはしない

session_start();
// session_regenerate_id(true);

// if(isset($_SESSION["member_login"]) === false) {
//     print "ログインしてく下さい。<br><br>";
//     print "<a href='../member_login/member_login.html'>ログイン画面へ<br><br></a>";
//     print "<a href='shop_list.php'>TOP画面へ</a>";
//     exit();
// }
//     if(isset($_SESSION["member_login"]) === true) {
//     print "ようこそ";
//     print $_SESSION["member_name"];
//     print "様　";
//     print "<a href='../member_login/member_logout.php'>ログアウト</a>";
//     print "<br><br>";
// }

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入りに追加</title>

    <link rel="stylesheet" href="../style/sass/base/reset.css">
    <link rel="stylesheet" href="../style/css/userPage.css">
    <!-- ファビコン -->
    <link rel="icon" href="../style/img/favicon.ico" id="favicon">

</head>

<body>

    <?php

    include "../common/user_page_header.html"; ?>

    <section class="cart-in">
        <?php
        //getでcodeの情報取ってくる    
        $agent_id = $_GET["agent_id"];

        // echo $code;


        // SESSION関数は、
        // session_start後に利用できるsession IDと結びついた特別な変数で、
        // 格納した値はログアウト（セッション切れ含む）しない限り消えることなく、
        // postやgetで値を渡さなくともページ移動で値が保持されるもの 

        //cartが空っぽじゃなかったらtrue

        if (isset($_SESSION["cart"]) === true) {
            //複数選択されたら配列を渡したいから一旦任意の変数に情報を移す
            $cart = $_SESSION["cart"];
            $quantity = $_SESSION["quantity"];

            //既にお気に入りに入ってたらだめ
            if (in_array($agent_id, $cart) === true) {
                print "<div class='cart-in_message'><p>すでにお気に入りにあります。</p></div>";
                print "<a href='user_agent_list.php' class='cart-in_back_btn'>エージェント一覧へ戻る</a>";
            }
        }
        //どっちもクリアしてたら
        if (empty($_SESSION["cart"]) === true or in_array($agent_id, $cart) === false) {
            $cart[] = $agent_id;
            $quantity[] = 1;
            $_SESSION["cart"] = $cart;
            $_SESSION["quantity"] = $quantity;

            print "<div class='cart-in_message'>お気に入りに追加しました。</div>";
            print "<a href='user_agent_list.php' class='cart-in_back_btn'>エージェント一覧へ戻る</a>";
        }

        ?>
    </section>
    <script src="../js/header.js"></script>
    <footer class="footer_fixed">
        <img src="../user_page/img/boozer_logo.png" alt="" id="boozer_logo">
    </footer>
</body>

</html>