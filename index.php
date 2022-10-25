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
                <a id="title" href="index.html">
                    <h1>英<span>単</span>語道場</h1>
                </a>
            </div>
        </header>
        <!-- ヘッダー部終わり -->

        <!-- メイン部 -->
        <div id="contentWrap">
            <h2>英単語道場へようこそ</h2>
            <div id="siteguide">
                <p>サイトの説明</p>
                <form id="form">
                    <div id="difficulty">
                        <div id="background">
                            <input type="checkbox" id="easy" name="easy" checked>
                            <label for="easy">easy</label>
                            <input type="checkbox" id="nomal" name="nomal">
                            <label for="nomal">nomal</label>
                            <input type="checkbox" id="hard" name="hard">
                            <label for="hard">hard</label>
                            <input type="checkbox" id="veryhard" name="veryhard">
                            <label for="veryhard">veryhard</label>
                        </div>
                    </div>
                    <div id="nextquestion">
                        <button id="font" type="submit"><a id="next" href="questionpage.php">問題へ</a></button>
                </form>
            </div>
        </div>
        <div class="push"></div>
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