<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[agent]掲載情報編集申請</title>
    <link rel="stylesheet" href="../style/sass/base/reset.css">
    <link rel="stylesheet" href="../style/css/agentPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "../common/agent_page_header.php";
    try {
        //agent_branch.phpでurlに乗せたやつを取ってくる 
        $agent_id = $_GET["agent_id"];

        $dsn = "mysql:host=db;dbname=shukatu;charset=utf8";
        $user = "root";
        $password = "password";
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM agent JOIN agent_account ON agent.id=agent_account.agent_id JOIN tag_existence ON agent.id=tag_existence.agent_id WHERE agent.agent_id=?";
        $stmt = $dbh->prepare($sql);
        $data[] = $agent_id;
        $stmt->execute($data);
        $dbh = null;
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);


        $dsn = "mysql:host=db;dbname=shukatu;charset=utf8";
        $user = "root";
        $password = "password";
        $dbh_2 = new PDO($dsn, $user, $password);
        $dbh_2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //urlに乗ってきたcodeを元に識別
        $sql_2 = "SELECT * FROM tag";
        $stmt_2 = $dbh_2->prepare($sql_2);

        $stmt_2->execute();
        $dbh_2 = null;
    } catch (Exception $e) {
        echo "（　´∀｀）つ□ 涙拭けよ: " . $e->getMessage() . "\n";
        print "<a href='../boozer_login/boozer_login.php'>ログイン画面へ</a>";
    }
    ?>
    <div class="agent-page__right-page-container">
        <h1><?php print $rec["company_name"]; ?>の情報を修正します。</h1>
        <form action="agent_info_edit_request_done.php" method="post" enctype="multipart/form-data" width="100%">
            <div class="agent_reg_form_wrapper">
                <div class="agent_account_reg_wrapper">
                    <h2 class="agent_reg_form_tittle">アカウント情報の登録</h2>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">エージェントid</span>
                        <input type="text" name="agent_id" value="<?php print $rec['agent_id']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <spa class="agent_reg_form_box_text">エージェント会社名</spa>
                        <input type="text" name="company_name" value="<?php print $rec['company_name']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">エージェント担当者名</span>
                        <input type="text" name="company_staff" value="<?php print $rec['company_staff']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">アカウントメールアドレス</span>
                        <input type="text" name="account_email_address" value="<?php print $rec['account_email_address']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">アカウントパスワード</span>
                        <input type="text" name="account_password" value="<?php print $rec['account_password']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">google account</span>
                        <input type="text" name="google_account" value="<?php print $rec['google_account']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">掲載開始日</span>
                        <input type="date" name="post_period_start" value="<?php print $rec['post_period_start']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">掲載終了日</span>
                        <input type="date" name="post_period_end" value="<?php print $rec['post_period_end']; ?>">
                    </div>
                </div>
                <div class="agent_info_reg_wrapper">
                    <h2 class="agent_reg_form_tittle">掲載情報の登録</h2>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">キャッチフレーズ</span>
                        <input type="text" name="catchphrase" value="<?php print $rec['catchphrase']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">特徴</span>
                        <input type="text" name="feature" value="<?php print $rec['feature']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">オンライン面談可否</span>
                        <input type="text" name="online_meeting" value="<?php print $rec['online_meeting']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">会員数</span>
                        <input type="text" name="membership" value="<?php print $rec['membership']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">メリット</span>
                        <input type="text" name="pros" value="<?php print $rec['pros']; ?>">
                    </div>
                    <div class="agent_reg_form_box">
                        <span class="agent_reg_form_box_text">デメリット</span>
                        <input type="text" name="cons" value="<?php print $rec['cons']; ?>">
                    </div>

                    <div class="checkbox_area">
                        <?php
                        while (true) {
                            $rec_2 = $stmt_2->fetch(PDO::FETCH_ASSOC);
                            if ($rec_2 === false) {
                                break;
                            } ?><div class="checkboxes">
                                <input type="checkbox" class="agent-edit__tag-existence" name="tag[]" value=<?php echo $rec_2["tag_code"]; ?>>
                                <?php echo $rec_2["tag_name"]; ?></input>
                            </div><?php } ?>
                            <input type="submit" value="OK" class="form_submit_btn">
                    </div>

                </div>
            </div>
            <input type="hidden" name="agent_id" value="<?php print $rec['agent_id']; ?>">
        </form>
    </div>
    </div>

</body>

</html>