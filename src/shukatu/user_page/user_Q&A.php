<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/sass/base/reset.css">
  <link rel="stylesheet" href="../style/css/userPage.css">
  <link rel="icon" href="../style/img/favicon.ico" id="favicon">
  <script src="../js/user_Q&A.js" defer></script>
  <title>Q&A・お問合せページ</title>
</head>

<body>
  <?php include "../common/user_page_header.html" ?>
  <section class="user_Q-A">
    <section id="Q-A">
      <h1 id="Q-A_title">Q&A</h1>
      <div id="Q-A_area">

        <div class="pare_of_Q-A">
          <div class="question">
            <span class="Q">
              <p>Q</p>
            </span>
            <div class="question_textarea">
              <p>複数のエージェントに問い合わせても大丈夫ですか？</p>
            </div>
            <span class="show_ans_wrapper"><span class="show_ans" id="show_ans_1"></span></span>
          </div>
          <div class="answer" id="answer_1">
            <span class="A">A</span>
            <div class="ans_textarea">
              <p>複数のエージェントに申し込むことをお勧めします！就活エージェントを利用する学生の多くは複数のエージェントに申請をしています。</p>
            </div>
          </div>
        </div>

        <div class="pare_of_Q-A">
          <div class="question">
            <span class="Q">
              <p>Q</p>
            </span>
            <div class="question_textarea">
              <p>申請をしたら必ずそのエージェントと契約をしなければいけませんか？</p>
            </div>
            <span class="show_ans_wrapper"><span class="show_ans" id="show_ans_2"></span></span>
          </div>
          <div class="answer" id="answer_2">
            <span class="A">A</span>
            <div class="ans_textarea">
              <p>いいえ！このサイトで行われる手続きは公式な契約ではありません。まずは気軽にエージェントに相談してみましょう。</p>
            </div>
          </div>
        </div>

        <div class="pare_of_Q-A">
          <div class="question">
            <span class="Q">
              <p>Q</p>
            </span>
            <div class="question_textarea">
              <p>申請したのにエージェントから連絡がありません。</p>
            </div>
            <span class="show_ans_wrapper"><span class="show_ans" id="show_ans_3"></span></span>
          </div>
          <div class="answer" id="answer_3">
            <span class="A">A</span>
            <div class="ans_textarea">
              <p>下のお問合せフォームにその旨を記入して送信してください。</p>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="user-contact">
      <h1 class="user-contact__tittle contact">お問い合わせ</h1>
      <form action="user_inquiry_form_check.php" method="post" enctype="multipart/form-data" class="user-contact__form">
        <div class="user-contact__form_inputBox">
          <ul class="user-contact__form_contents">
            <li class="user-contact__form_contents_li"><span class="required">必須　</span>氏名</li>
            <li class="user-contact__form_contents_li"><span class="required">必須　</span>メールアドレス</li>
            <li class="user-contact__form_contents_li"><span class="required">必須　</span>お問い合わせ事項</li>
          </ul>
          <div class="user-contact__form_input-area">
          <div class="user-contact__form_head"><span class="required">必須　</span>氏名</div>
            <input type="text" name="name" class="user-contact__form_input-area_input">
            <div class="user-contact__form_head"><span class="required">必須　</span>メールアドレス</div>
            <input type="text" name="mail_address" class="user-contact__form_input-area_input">
            <div class="user-contact__form_head"><span class="required">必須　</span>お問い合わせ事項</div>
            <textarea name="question" cols="30" rows="10" wrap="hard" class="user-contact__form_input-area_input"></textarea>
          </div>
        </div>
        <input type="submit" value="送信" class="user-contact__form_submit">
      </form>
    </section>
  </section>
  <footer>
    <img src="./img/boozer_logo.png" alt="" id="boozer_logo">
  </footer>
</body>

</html>