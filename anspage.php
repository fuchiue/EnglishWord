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
                        <p>N問目</p>
                    </div>
                    <div id="answer_rate">
                        <p>正解数:Y回/出題数:N回&#009;<span>正答率--%</span></p>
                    </div>
                </div>
                <div id="question_word">
                    <h3>問題単語</h3>
                </div>

                <div id="answer_field">
                    <ul id="answer_ul">
                        <li>
                            <span class="answord">単語</span>
                            <p class="meaning">問題単語の意味or問題単語以外の単語の意味</p>
                        </li>
                        <li>
                            <span class="answord">単語</span>
                            <p class="meaning">問題単語の意味or問題単語以外の単語の意味</p>
                        </li>
                        <li>
                            <span class="answord">単語</span>
                            <p class="meaning">問題単語の意味or問題単語以外の単語の意味</p>
                        </li>
                        <li>
                            <span class="answord">単語</span>
                            <p class="meaning">問題単語の意味or問題単語以外の単語の意味</p>
                        </li>
                    </ul>
                </div>
                <form id="form"></form>
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