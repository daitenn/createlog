<?php

$log = array();

function createLog()
{
  echo 'ストレスログを登録いたします。' . PHP_EOL;
  echo '内容:';
  $contents = trim(fgets(STDIN));
  echo 'ストレスの強さ（５点満点）:';
  $dangerous = trim(fgets(STDIN));
  echo '日時(例 2021/2/25):';
  $day = trim(fgets(STDIN));
  echo '登録が完了いたしました。' . PHP_EOL . PHP_EOL;

  return [
    'content' => $contents,
    'dangerous' => $dangerous,
    'day' => $day,
  ];
}

function listLog($log)
{
  echo 'ストレスログを表示いたします。' . PHP_EOL;
  foreach ($log as $logs) {
    echo '内容:' . $logs['content'] . PHP_EOL;
    echo 'ストレスの強さ（５点満点）:' . $logs['dangerous'] . PHP_EOL;
    echo '日時(例 2021/2/25):' . $logs['day'] . PHP_EOL;
    echo '----------' . PHP_EOL;
  }
}





while (true) {
  echo '1:ストレスログを登録します' . PHP_EOL;
  echo '2:ストレスログを表示いたします' . PHP_EOL;
  echo '3:アプリ終了' . PHP_EOL;
  echo '番号を1,2,3から選択してください:';
  $number = trim(fgets(STDIN));

  if ($number === '1') {
    $log[] = createLog();
  } elseif ($number === '2') {
    listLog($log);
  } elseif ($number === '3') {
    break;
  }
}
