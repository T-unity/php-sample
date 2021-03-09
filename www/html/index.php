<?php

$title = '一言掲示板';
$content = __DIR__ . '/views/index.php';
include __DIR__ . '/views/layout.php';

define('FILENAME', 'message.txt');

// 変数の初期化
$now_date = null;
$data = null;
$file_handle = null;

if ( !empty($_POST['btn_submit']) ) {
  if ( $file_handle = fopen( FILENAME, "a") ) {

    // 書き込み日時の取得
    $now_date = date("Y-m-d H:i:s");

    // 書き込むデータを作成
    $data = "'".$_POST['view_name']."','".$_POST['message']."','".$now_date."'\n";

    // 書き込みを実行
    fwrite($file_handle, $data);

    // ファイルを閉じる
    fclose( $file_handle );
  }
}

if ($file_handle = fopen(FILENAME,'r')) {
  while($data = fgets($file_handle)) {
    echo $data . "<br>";
  }
  fclose($file_handle);
}
