<header class="header">
    <span class="header__craft_logo">CRAFT</span>
    <span class="header__for_boozer">for boozer</span>
    <span class="header__staff_name"><?php print $_SESSION["name"];?>様ログイン中</span>
</header>

<div class="boozer_top_page_container">
        <div class="side_menu_container">
            <ul class="side_menu_wrapper">
                <li class="side_menu"><a href="../boozer_login/boozer_login_top.php" class="side_menu_text">ホーム</a></li>
                <li class="side_menu"><a href="../agent_info/agent_list.php" class="side_menu_text">エージェント一覧</a></li>
                <li class="side_menu"><a href="../agent_info/agent_add.php" class="side_menu_text">新規エージェント作成</a></li>
                <li class="side_menu"><a href="" class="side_menu_text">学生情報一覧</a></li>
                <li class="side_menu"><a href="../boozer_page/boozer_staff_list.php" class="side_menu_text">boozerスタッフ管理</a></li>
                <li class="side_menu"><a href="../boozer_login/boozer_logout.php" class="side_menu_text">ログアウト</a></li>
            </ul>
        </div>