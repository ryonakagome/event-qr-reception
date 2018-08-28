<?php
    $ci = $_GET['c'];
    require_once('config/config.php');
    $sql = mysqli_query($db_link, "SELECT * FROM customer WHERE CustomerID = '$ci'");
    $result = mysqli_fetch_assoc($sql);
    print('<img src="http://chart.apis.google.com/chart?chs=200x200&cht=qr&chl='.$result['TicketID'].'" alt="QRコード" /><br>');
    print('名前: '.$result['CustomerName'].'('.$result['CustomerNameKana'].')<br>');
    print('メール:'.$result['Email']);
    
?>
