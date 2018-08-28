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
            <h1>イベント選択</h1>
            <p>受付するイベントを選択してください。</p>
            <ul>
                <?php
                    require_once('config/config.php');
                    $sql = mysqli_query($db_link, "SELECT * FROM event");
                    while($result = mysqli_fetch_assoc($sql)) {
                        print('<li><a href="qrcheck.php?e='.$result['EventID'].'">'.$result['EventID'].'. '.$result['EventName'].'</a></li>');
                    }
                ?>
            </ul>
            <a href="addevent.html">イベントを追加</a>
        </div>
    </body>
</html>