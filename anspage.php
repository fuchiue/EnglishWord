<?php
$answord = $_POST['answord'];
$questSum = $_POST['questSum'] + 1; //問題数の更新
$ansSum = $_POST['ansSum'];
$DATA = $_POST['DATA'];
$table = $_POST['table'];
$ansButton = $_POST['ansButton'];

//配列に変換
$quest4 = unserialize(urldecode($DATA));

$ansres;
//処理
if ($ansButton == $answord) {
    $ansres = '正解';
    $ansSum++;
} elseif ($ansButton == 0) {
    $ansres = "解答なし";
    $ansButton = "なし";
} else {
    $ansres = '不正解';
}

//正答率計算
$hitrate = $ansSum / $questSum * 100;
$hitrate = round($hitrate, 2);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英単語道場</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/index.css?v=2">
</head>

<body>
    <!-- ヘッダー部 -->
    <header id="headerWrap" class="centeringBox">
        <p id="logo">英</p>
        <div id="header" class="centeringContent">
            <a id="title" href="index.php">
                <h1>英<span>単</span>語道場</h1>
            </a>
        </div>
    </header>
    <!-- ヘッダー部終わり -->
    <!-- メイン部 -->
    <div id="wrapper">
        <div id="contentWrap">
            <div id="maincontent">
                <div id="status">
                    <div id="question_number">
                        <p><?= $questSum . "問目" ?></p>
                    </div>
                    <div id="answer_rate">
                        <p>正解数:<?= $ansSum ?>回/出題数:<?= $questSum ?>回&#009;<span>正答率<?= $hitrate ?>%</span></p>
                    </div>
                </div>
                <h3><?= $ansres ?></h3>
                <div class="ansRight">
                    <p>問題</p>
                    <p>あなたの解答</p>
                </div>
                <div class="ansLeft">
                    <p><?= $answord ?></p>
                    <p><?= $ansButton ?></p>
                </div>

                <div id="answer_field">
                    <ul id="answer_ul">
                        <?php foreach ($quest4 as $row) : ?>
                            <li>
                                <button class="ansbutton"><?= $row['word'] ?></button><br>
                                <p><?= $row['mean'] ?></p>
                            </li>
                        <?php endforeach;
                        unset($row);
                        ?>
                    </ul>
                </div>
                <form id="form" method="POST" action="./questionpage.php">
                    <div id="nextquestion">
                        <input type="hidden" name="questSum" value=<?= $questSum ?>>
                        <input type="hidden" name="ansSum" value=<?= $ansSum ?>>
                        <input type="hidden" name="hitrate" value=<?= $hitrate ?>>
                        <input type="hidden" name="table" value=<?= $table ?>>
                        <button id="font" type="submit">次の問題へ</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- メイン部終わり -->

        <!-- フッター部-->
        <footer id="footerWrap">
            <p>&copy; All rights reserved by webcampnavi.</p>
            <div id="footerlogo">
                <a href="index.php">英<span>単</span>語道場</a>
            </div>
        </footer>
        <!-- フッター部終わり -->
    </div>
</body>

</html>