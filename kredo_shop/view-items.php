<?php
session_start();
require "connection.php";

// get all products
function getAllItems()
{
    $conn = connection();

    // SQL Code: get record from two tables
    $sql = "SELECT items.id,items.item_name,items.item_price,items.quantity, items.photo, users.username AS `users` FROM `items` INNER JOIN `users` ON items.user_id = users.id";

    // execute
    if ($result = $conn->query($sql)) {
        return $result;
    } else {
        die("Error retrieving all products fron two tables:" .
            $conn->error);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Items</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "main-nav.php";
    ?>
    <main class="container py-5">
        <a href="add-item.php" class="btn btn-outline-success float-end me-2">Add New Item</a>
        <a href="sign-up.php" class="btn btn-outline-info float-end me-2">Add New User</a>

        <h2 class="h3 text-muted">Items List</h2>

        <div class="table table-responsive-lg">
            <table class="table table-hover mt4">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Quantity</th>
                        <th>User Name</th>
                        <th>Photo</th>
                        <th style="width: 95px;"></th> <!--for action button-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // print_r(getAllProducts());
                    $all_items = getAllItems();
                    while ($item = $all_items->fetch_assoc()) {
                        // print_r($item);
                    ?>

                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['item_name'] ?></td>
                            <td><?= $item['item_price'] ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= $item['users'] ?></td>
                            <td><img src="assets/images/<?= $item['photo'] ?>" alt="<?= $item['photo'] ?>" style="width: 15%"></td>
                            <td>
                                <a href="edit-item.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="delete-item.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm"><i class=" fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>


                </tbody>

            </table>
        </div>
    </main>


    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>