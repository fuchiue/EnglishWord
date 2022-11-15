<?php
class Until
{
  public static $db;
  public static $max;
  public static $data;
  public static $quesnum = 0;
  public static $ansid;

  function __construct($getTable)
  {
    try {
      self::$db = new PDO('mysql:dbname=enword;host=localhost;charset=utf8mb4', 'root', 'root');
      // echo "接続OK！" . "\n";
    } catch (PDOException $e) {
      echo 'DB接続エラー！: ' . $e->getMessage();
    }
    //table名
    self::$data = $getTable;
    $data = self::$data;
    // 対象テーブルを選択しSELECT文を変数tableへ格納
    $table = "SELECT word,mean FROM $data ";
    // queryを実行し、結果を変数に格納
    $db = self::$db;
    $sql = $db->query($table);
    self::$max = $sql->rowCount(); //レコード数を取得
  }

  // echo $max;
  public function createMon()
  {
    $index = array(0, 0, 0, 0);
    foreach ($index as &$recod) {
      // echo ":";
      $recod = mt_rand(1, self::$max);
    }
    unset($recod);
    echo '<br>';
    $data = self::$data;
    // ランダムな４つのレコードを取得するSQL
    $makequest = "SELECT id,word,mean FROM $data WHERE id IN($index[0],$index[1],$index[2],$index[3])";
    self::$ansid = $index[mt_rand(0, 3)];
    //SQL実行
    $db = self::$db;
    $quest = $db->query($makequest);
    $quest4 = $quest->fetchAll();

    // 実行結果表示
    // foreach ($quest4 as $row) {
    //     echo $row['mean'] . '<br>';
    // }
    return $quest4;
  }
  public function getansid()
  {
    return self::$ansid;
  }
}
