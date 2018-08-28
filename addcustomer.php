<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <title>イベント選択</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="do-addcustomer.php" method="POST">
                <p>顧客名</p>
                <input type="text" name="cn">
                <p>顧客名（かな）</p>
                <input type="text" name="cnk">
                <p>メールアドレス</p>
                <input type="email" name="em">
                <p>イベントID</p>
                <?php
                    session_start();
                    $EventID = $_SESSION['e'];
                    print('<input type="number" name="ei" value="'.$EventID.'">');
                ?>
                <button type="submit">追加</button>
            </form>
        </div>
    </body>
</html>