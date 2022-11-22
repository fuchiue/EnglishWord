<?php
if (!isset($_POST['table'])) {
    header("Location: ./index.php");
    exit;
}
$answord;
$questSum = $_POST['questSum'];
$ansSum = $_POST['ansSum'];
$hitrate = $_POST['hitrate'];
$table = $_POST['table'];
$questType = $_POST['questType'];

include('Until.php');
$counter = 0;
$Mon = new Until($table);
$quest4 = $Mon->createMon();
$ansid = $Mon->getansid();
$dataStr = urlencode(serialize($quest4));

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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5088437373794003" crossorigin="anonymous"></script>
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
                        <p><?= $questSum + 1 ?>問目</p>
                    </div>
                    <div id="answer_rate">
                        <p>正解数:<?= $ansSum ?>回/出題数:<?= $questSum ?>回&#009;<span>正答率<?= $hitrate ?>%</span></p>
                    </div>
                </div>
                <h3>
                    <?php
                    foreach ($quest4 as $row) {
                        if ($row['id'] == $ansid) {
                            if ($questType == 1) {
                                echo ($row['word']);
                            } else {
                                echo ($row['mean']);
                            }
                            $answord = "{$row['word']}";
                        }
                    }
                    ?>
                </h3>
                <form id="form" method="POST" action="./anspage.php">
                    <input type="hidden" name="questSum" value=<?= $questSum ?>>
                    <input type="hidden" name="answord" value="<?= $answord ?>">
                    <input type="hidden" name="ansSum" value=<?= $ansSum ?>>
                    <input type="hidden" name="DATA" value="<?= $dataStr ?>">
                    <input type="hidden" name="table" value="<?= $table ?>">
                    <input type="hidden" name="questType" value=<?= $questType ?>>
                    <div id="answer_field">
                        <ul id="answer_ul">
                            <br>
                            <?php foreach ($quest4 as $row) : ?>
                                <li id="q">
                                    <p>
                                        <button id="mean" class="ansbutton" type="submit" name="ansButton" value="<?= $row['word'] ?>"><?= ++$counter ?></button>
                                    <div id="centense">
                                        <span id="mean"><?= $questType == 1 ? $row['mean'] : $row['word'] ?></span>
                                    </div>
                                    </p>
                                    <br>
                                </li>
                            <?php endforeach;
                            unset($row);
                            ?>
                        </ul>
                    </div>
                    <div id="nextquestion">
                        <button id="nextbutton2" type="submit" name="ansButton" value="noans">解答へ</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- メイン部終わり -->

        <!-- フッター部-->
        <footer id="footerWrap">
            <div id="profile">
                <p><a id="mail" href="https://docs.google.com/forms/d/e/1FAIpQLSdddOZf91RJolSAmVTlc5ICXddzDmmZOrl2q9-OTPLUOlTvRA/viewform?usp=sf_link" target="_blank" rel="noopener noreferrer">お問い合わせフォームへ</a></p>
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