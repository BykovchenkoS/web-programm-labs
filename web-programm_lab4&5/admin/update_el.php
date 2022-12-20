<?php require_once("includes/connection.php"); ?>

<?php
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $insert_sql = "UPDATE `flower_shop`.`products` SET `name_product` = '$title', 
                                                        `description` = '$description', 
                                                        `price` = '$price' 
                                                    WHERE (`id_product` = '$id')";

    mysqli_query($mysqli, $insert_sql);

    header('Location: ../php/catalog.php');

   
?>