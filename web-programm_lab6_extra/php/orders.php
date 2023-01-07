<?php require_once("../admin/includes/connection.php"); ?>

<!DOCTYPE html>
<html>

    <head>
            <meta charset="utf-8">
            <title>Flower. ORDERS.</title>
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="../css/style_catalog.css">
            <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <form action="index.php">
                <input type="submit" value="ADMIN page" class="button_home">
        </form>

        <h1>ORDERS</h1>
        
        <table class="catalog_table">
            <tr>
                <th>ID_orders</th>
                <th>ID_user</th>
                <th>ID_product</th>
                <th>Notes</th>
                <th>Sum</th>
                <th>Status</th>
            </tr>
            
        </form>
    <?php
        $query = 'SELECT * FROM flower_shop.orders';
        $orders = mysqli_query($mysqli, $query);
        $orders = mysqli_fetch_all($orders);

       foreach($orders as $order) {
            ?>
                    <tr>
                        <td><?= $order[0] ?></td>
                        <td><?= $order[1] ?></td>
                        <td><?= $order[2] ?></td>
                        <td><?= $order[3] ?></td>
                        <td><?= $order[4] ?></td>
                        <td><?= $order[5] ?></td>
                    </tr>
            
                <?php
            }
        ?>
    
        </table>

        

    </body>

</html>
