<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
    <title>英単語道場(一問一答)</title>
    <link rel="stylesheet" href="css/index.css?<?php echo date('YmdHis'); ?>" />
    <meta name=”description“ content="英単語を効率よく一問一答形式で解いていく英単語学習サイトです。TOEICの単語(4080単語)を集中的に対策するコースと48000単語をひたすらに解き続けるコースを選択出来ます">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5088437373794003" crossorigin="anonymous"></script>

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
            <h1>英単語道場へようこそ</h1>
            <div id="siteguide">
                <p id="description">英単語を効率よく一問一答形式で解いていく英単語学習サイトです。<br>TOEICの単語(4080単語)を集中的に対策するコースと<br>48000単語をひたすらに解き続けるコースを選択出来ます。</p>
            </div>
            <form action="questionpage.php" method="POST">
                <input type="hidden" name="questSum" value=0>
                <input type="hidden" name="ansSum" value=0>
                <input type="hidden" name="hitrate" value=0>
                <div class="radioButoon">
                    <label id="how"><input type="radio" name="questType" value=1 checked> 単語->意味</label>
                    <label id="how"><input type="radio" name="questType" value=2> 意味->単語</label>
                </div>
                <div class="radioButoon">
                    <label id="table"><input type="radio" name="table" value="toeic_table" checked>TOEIC単語(4,080問)</label>
                    <label id="table"><input type="radio" name="table" value="enword_table">英単語集(48,000問)</label>
                </div>
                <div id="nextbutton">
                    <button id="nextbutton2" type="submit">問題へ</button>
                </div>
            </form>
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