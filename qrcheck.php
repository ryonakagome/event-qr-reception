<?php
    $EventID = $_GET['e'];
    session_start();
    $_SESSION['e'] = $EventID;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex,nofollow" />
        <title>イベント選択</title>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>QRコードを読み取り</h1>
            <video id="preview" style="width: 80%;height: 60%;"></video>
            <script>
                var videoTag = document.getElementById('preview');
                var info = document.getElementById('info');
                var scanner = new Instascan.Scanner({ video: videoTag });

                scanner.addListener('scan', function(value) {
                    info.value = value;
                    M.toast({html: 'QRコードを読み取りました。'})
                    document.getElementById('sound-file').play();
                    document.cf.submit();
                });
                
                Instascan.Camera.getCameras()
                .then(function (cameras) {
                    //カメラデバイスを取得できているかどうか？
                    if (cameras.length > 0) {
                        //カメラのデバイス情報を指定して読み取りを開始する
                        scanner.start( cameras[0] );
                    }
                    else {
                        console.error('カメラが見つかりません！');
                    }
                })
                .catch(function(err) {
                    alert(err);
                });
            </script>
            <form action="d-checkticket.php" method="GET" name="cf">
                <input type="text" name="TicketID" class="validate" id="info">
            </form>
            <a href="addcustomer.php">ADDC</a><br>
            <a href="logout.php">LO</a>
            <audio id="sound-file" preload="auto">
                <source src="sound/yomitori.mp3" type="audio/wav">
            </audio>
        </div>
    </body>
</html>

            
            