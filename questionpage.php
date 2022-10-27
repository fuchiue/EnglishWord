<?php
$answord;
$diff = $_POST['level[]'];
$questSum = $_POST['questSum'];
$ansSum = $_POST['ansSum'];
$hitrate = $_POSt['hitrate'];
include('Until.php');
$counter = 0;
$Mon = new Until($diff);
$quest4 = $Mon->createMon();
$ansid = $Mon->getansid();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英単語道場</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
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
                        <p>何問目</p>
                    </div>
                    <div id="answer_rate">
                        <p>正解数:<?= $ansSum ?>回/出題数:<?= $questSum ?>回&#009;<span>正答率<?= $hitrate ?>%</span></p>
                    </div>
                </div>
                <div id="question_word">
                    <h3>
                        <?php
                        foreach ($quest4 as $row) {
                            if ($row['id'] == $ansid) {
                                echo ($row['word']);
                                $answord = $row['word'];
                            }
                        }
                        ?>
                    </h3>
                </div>
                <form id="form">
                    <div id="answer_field">
                        <ul id="answer_ul">
                            <?php foreach ($quest4 as $row) : ?>
                                <li>
                                    <button class="ansbutton"><a href="anspage.php"><?= ++$counter ?></a></button><br>
                                    <p><?= $row['mean'] ?></p>
                                </li>
                            <?php endforeach;
                            unset($row);
                            ?>
                        </ul>
                    </div>
                    <div id="nextquestion">
                        <button id="font" type="submit"><a id="next" href="questionpage.php">次の問題へ</a></button>
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