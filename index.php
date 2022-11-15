<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英単語道場(一問一答)</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <meta name=”description“ content="英単語を効率よく一問一答形式で解いていく英単語学習サイトです。TOEICの単語(4080単語)を集中的に対策するコースと48000単語をひたすらに解き続けるコースを選択出来ます">
</head>

<body>
    <div id="wrapper">
        <!-- ヘッダー部 -->
        <header id="headerWrap" class="centeringBox">
            <p id="logo">英</p>
            <div id="header" class="centeringContent">
                <a id="title" href="index.html">
                    <h1>英<span>単</span>語道場</h1>
                </a>
            </div>
        </header>
        <!-- ヘッダー部終わり -->

        <!-- メイン部 -->
        <div id="contentWrap">
            <h1>英単語道場へようこそ</h1>
            <div id="siteguide">
                <p>英単語を効率よく一問一答形式で解いていく英単語学習サイトです。TOEICの単語(4080単語)を集中的に対策するコースと48000単語をひたすらに解き続けるコースを選択出来ます</p>
                <form action="questionpage.php" method="POST">
                    <input type="hidden" name="questSum" value=0>
                    <input type="hidden" name="ansSum" value=0>
                    <input type="hidden" name="hitrate" value=0>
                    <div id=radioButoon>
                        <input type="radio" name="table" value="toeic_table" checked>TOEIC単語(4060)
                        <input type="radio" name="table" value="enword_table">英単語集(48000)
                    </div>
                    <button id="font" type="submit">問題へ</button>
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