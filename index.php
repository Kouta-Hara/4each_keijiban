<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachlog 掲示板</title>
        <link rel = "stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        
    <?php
    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

        <header>
            <img src ="4eachblog_logo.jpg">
            <div class ="topmenu">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>

        <main>
            <div calss="main-container">
                <div class= "left">
                <h1>プログラミングに役立つ掲示板</h1>
                    <div class = "left-container">
                        <form method ="post" action="insert.php">
                        <h2>入力フォーム</h2>
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="handlname">
                            </div>

                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size="35" name="title">
                            </div>

                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="50" rows="7" name="comments"></textarea>
                            </div>

                            <div>
                                <input type = "submit" class ="submit" value="投票する">
                            </div>

                        </form>

                        <?php
                            while($row = $stmt->fetch()){
                                echo "<div class='kiji'>";
                                    echo"<h3>".$row['title']."</h3>";
                                    echo"<div class = 'contens'>";
                                        echo $row['comments'];
                                        echo"<div class='handlname'>post by ".$row['handlname']."</div>";
                                    echo"</div>";
                                echo"</div>";      
                            }               
                        ?>

                    </div>
                </div>
                <div class = "right">
                    <div class = "right-container">
                        <h2>人気の記事</h2>
                            <ul>
                                <li>PHPオススメ本</li>
                                <li>PHP MyAdminの使い方</li>
                                <li>今人気のエディタ Top5</li>
                                <li>HTMLの基礎</li>
                            </ul>

                        <h2>オススメリンク</h2>
                            <ul>
                                <li>インターノウス株式会社</li>
                                <li>XAMPPのダウンロード</li>
                                <li>Eclipsのダウンロード</li>
                                <li>Bracketsのダウンロード</li>
                            </ul>

                        <h2>カテゴリ</h2>
                            <ul>
                                <li>HTMl</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>JavaScript</li>
                            </ul>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            copyright©internous|4each blog the which provides A to Z about programing.
        </footer>
    </body>
</html>