<?php
session_start();
require "connection.php";

// get all products
function getAllProducts()
{
    $conn = connection();

    // SQL Code: get record from two tables
    $sql = "SELECT products.id,products.name,products.description,products.price,sections.name AS `section` FROM `products` INNER JOIN `sections` ON products.section_id = sections.id";
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
    <title>Products</title>
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
        <a href="sections.php" class="btn btn-outline-info float-end me-2">Add New Section</a>
        <a href="add-product.php" class="btn btn-outline-success float-end me-2">Add New Product</a>


        <h2 class="h3 text-muted">Product List</h2>

        <div class="table table-responsive-lg">
            <table class="table table-hover mt4">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRICE</th>
                        <th>SECTION</th>
                        <th style="width: 95px;"></th> <!--for action button-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // print_r(getAllProducts());
                    $all_products = getAllProducts();
                    while ($product = $all_products->fetch_assoc()) {
                        // print_R($product);
                    ?>

                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['section'] ?></td>
                            <td>
                                <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger btn-sm"><i class=" fa-regular fa-trash-can"></i></a>
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