<?php
    require_once("../admin/includes/connection.php");

    $query = 'SELECT COUNT(*) FROM flower_shop.orders WHERE status=0';
    $cnt = mysqli_query($mysqli, $query);
    $cnt = mysqli_fetch_row($cnt);
    $res = $cnt[0];
    echo $res;
?>