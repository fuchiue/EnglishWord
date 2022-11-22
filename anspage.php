<?php

if (!isset($_POST['ansButton'])) {
    header("Location: ./index.php");
    exit;
}

$answord = $_POST['answord'];
$questSum = $_POST['questSum'] + 1; //問題数の更新
$ansSum = $_POST['ansSum'];
$DATA = $_POST['DATA'];
$table = $_POST['table'];
$ansButton = $_POST['ansButton'];
$questType = $_POST['questType'];
$counter = 0;

//配列に変換
$quest4 = unserialize(urldecode($DATA));

$ansres;
$ansid;
//処理
if ($ansButton == $answord) {
    $ansres = '正解';
    $ansSum++;
    $ansid = 'ok';
} elseif (strcmp($ansButton,'noans') == 0) {
    $ansres = "解答なし";
    $ansButton = "なし";
    $ansid = 'nomal';
} else {
    $ansres = '不正解';
    $ansid = 'no';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
    <title>英単語道場(一問一答)</title>
    <link rel="stylesheet" href="css/index.css?<?php echo date('YmdHis'); ?>" />
    <meta name=”description“ content="英単語を効率よく一問一答形式で解いていく英単語学習サイトです。TOEICの単語(4080単語)を集中的に対策するコースと48000単語をひたすらに解き続けるコースを選択出来ます">
</head>

<body>
    <div id="wrapper">
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
                <div id="anscheck">
                    <h3>
                        <p id="<?= $ansid ?>">【<?= $ansres ?>】</p>
                        <p id="ques">問題 <?= $answord ?></p>
                        <p id="yourans">あなたの回答 <?= $ansButton ?></>
                    </h3>
                </div>
                <div id="answer_field">
                    <ul id="answer_ul">
                        <br>
                        <?php foreach ($quest4 as $row) : ?>
                            <li id="a">
                                <p>
                                    <button id="mean" class="ansbutton"><?= ++$counter ?></button>
                                <div id="centense">
                                    <span id="mean" class="japan"><?= $questType == 1 ? $row['mean'] : $row['word'] ?></span>
                                </div>
                                </p>
                            </li>
                            <span id="mean" class="eng"><?= $questType == 1 ? $row['word'] : $row['mean'] ?></span>
                            <br>
                        <?php endforeach;
                        unset($row);
                        ?>
                    </ul>
                </div>
                <form id="form" method="POST" action="./questionpage.php">
                    <input type="hidden" name="questSum" value=<?= $questSum ?>>
                    <input type="hidden" name="ansSum" value=<?= $ansSum ?>>
                    <input type="hidden" name="hitrate" value=<?= $hitrate ?>>
                    <input type="hidden" name="table" value=<?= $table ?>>
                    <input type="hidden" name="questType" value=<?= $questType ?>>
                    <div id="nextquestion">
                        <button id="nextbutton2" type="submit">次の問題へ</button>
                </form>
            </div>
        </div>
    </div>
    <!-- メイン部終わり -->

    <!-- フッター部-->
    <footer id="footerWrap">
            <div id ="profile">
                <p><a id ="mail" href="https://docs.google.com/forms/d/e/1FAIpQLSdddOZf91RJolSAmVTlc5ICXddzDmmZOrl2q9-OTPLUOlTvRA/viewform?usp=sf_link" target="_blank" rel="noopener noreferrer">お問い合わせフォームへ</a></p>
                <p id="copylight">&copy; All rights reserved by webcampnavi.</p>
            </div>
            <div id="footerlogo">
                <a href="index.php" id="footer">英<span>単</span>語道場</a>
            </div>
        </footer>
        <!-- フッター部終わり -->
    </div>
</body>

</html>