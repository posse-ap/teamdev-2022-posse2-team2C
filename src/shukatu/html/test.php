<?php
$from = 'from@example.com';
$to   = 'to@example.com';
$subject = 'テストメール';
$body = 'メールの送信テストです。メール届いちゃってんじゃないの！？！？！？！';

$ret = mb_send_mail($to, $subject, $body, "From: {$from} \r\n");
var_dump($ret);
