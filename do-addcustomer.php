<?php
    $cn = $_POST['cn'];
    $cnk = $_POST['cnk'];
    $em = $_POST['em'];
    $ei = $_POST['ei'];

    require_once('config/config.php');

    $sql = mysqli_query($db_link, "SELECT MAX(CustomerID) AS num FROM customer");
    $result1 = mysqli_fetch_assoc($sql);
    $cid = $result1['num'] + 1;

    $ti = rand(1111111,9999999);

    $sql = mysqli_query($db_link, "INSERT INTO customer VALUES ('$cid', '$cn', '$cnk', '$em', '$ei', '$ti', '0')");
    header("Location: viewc.php?c=".$cid);
    exit();
?>