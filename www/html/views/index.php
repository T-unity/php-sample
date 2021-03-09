<?php

define('FILENAME', 'message.txt');

// 変数の初期化
$now_date = null;
$data = null;
$file_handle = null;
// メッセージを配列に格納
$split_data = null;
$message = array();
$message_array = array();

// 入力データの書き込み
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

// 表示部分
if ($file_handle = fopen(FILENAME,'r')) {
  while($data = fgets($file_handle)) {
    $split_data = preg_split('/\'/', $data);

    $message = array(
      'view_name' => $split_data[1],
      'message' => $split_data[3],
      'post_date' => $split_data[5],
    );
    array_unshift($message_array, $message);

    // echo $data . "<br>";
  }
  fclose($file_handle);
}

?>

<form action="" method="post">
  <div>
    <label for="view_name">表示名</label>
    <input id="view_name" type="text" name="view_name" value="">
  </div>
  <div>
    <label for="message">ひとことメッセージ</label>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
  </div>
  <input type="submit" name="btn_submit" value="書き込む">
</form>
<hr>
<section>
  <?php if (!empty($message_array)): ?>
    <?php foreach($message_array as $value): ?>
      <article>
        <div class="info">
          <h2><?php echo $value['view_name']; ?></h2>
          <time><?php echo date('Y年m月d日 H:i', strtotime($value['post_date'])); ?>
        </div>
        <p><?php echo $value['message']; ?></p>
      </article>
    <?php endforeach; ?>
  <?php endif; ?>
</section>
