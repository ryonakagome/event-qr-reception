<?php
    $db_host = "localhost";
    $db_user = "qrr";
    $db_pass = "";
    $db_name = "qrr";

    $db_link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    mysqli_set_charset($db_link, "utf8");
?>
