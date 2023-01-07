<?php require_once("includes/connection.php"); ?>

<?php
    $id = $_GET['id'];

    $insert_sql = "DELETE  FROM flower_shop.img_products  WHERE (`id_product` = '$id')";
    $insert_sql_2 ="DELETE FROM flower_shop.products  WHERE (`id_product` = '$id')";
 
    mysqli_query($mysqli, $insert_sql);
    mysqli_query($mysqli, $insert_sql_2);

    header('Location: ../php/catalog.php');   
?>