<?php
    $EventName = $_POST['EventName'];
    
    require_once('config/config.php');

    $sql = mysqli_query($db_link, "SELECT MAX(EventID) AS num FROM event");
    $result1 = mysqli_fetch_assoc($sql);

    $EventID = $result1['num'] + 1;

    $sql = mysqli_query($db_link, "INSERT INTO event VALUES('$EventID', '$EventName')");

    header('Location: index.php');
    exit();
?>