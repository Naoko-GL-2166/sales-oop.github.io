<?php
session_start();
require "connection.php";

// SQL Code: get all records
function getAllUsers()
{
    $conn = connection();

    // SQL Code: get all records
    $sql = "SELECT * FROM `users`";

    // execute
    if ($result = $conn->query($sql)) {
        return $result;
    } else {
        die("Error retrieving all users: " . $conn->error);
    }
}

// get single product
function getSpecificRecord($id)
{
    $conn = connection();

    // SQL Code: get single record
    $sql = "SELECT * FROM `items` WHERE id = $id";

    if ($result = $conn->query($sql)) {
        return $result->fetch_assoc();
        // return an associative array
        // return s single record only
    } else {
        die("Error retrieving a single product: " . $conn->error);
    }
}

// get id from url
$id = $_GET['id'];

$item = getSpecificRecord($id);
// print_r($item_price);

// update specific product
function  updateItem(
    $id,
    $item_name,
    $quantity,
    $item_price,
    $user_id,
    $photo_name,
    $photo_tmp
) {
    $conn = connection();

    // SQL Code: update single record
    $sql = "UPDATE `items` SET `item_name` = '$item_name', `item_price` = '$item_price', `quantity` = '$quantity', `user_id` = '$user_id', `photo` = '$photo_name' WHERE id = $id";

    if ($conn->query($sql)) {
        $destination = "assets/images/$photo_name";
        move_uploaded_file($photo_tmp, $destination);
        header("location: view-items.php");
        exit;
    } else {
        die("Error updating the record: " . $conn->error);
    }
}


// get the data from the form
if (isset($_POST['btn_update'])) {
    $id = $_GET['id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $quantity = $_POST['quantity'];
    $user_id = $_POST['user_id'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    updateItem(
        $id,
        $item_name,
        $quantity,
        $item_price,
        $user_id,
        $photo_name,
        $photo_tmp
    );
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
    <main class="card w-25 mx-auto my-5">
        <div class="card-header bg-success text-white">
            <h2 class="card-title h4 mb-0">Update Item</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <label for="item_name" class="form-label small">Item Name</label>
                <input type="text" value="<?= $item['item_name'] ?>" name=" item_name" id="item_name" class="form-control mb-3" required autofocus>

                <label for="item_price" class="form-label small">Item Price</label>
                <div class="input-group mb-2">
                    <div class="input-group-text">$</div>
                    <input type="number" value="<?= $item['item_price'] ?>" name="item_price" id="item_price" class="form-control" step="any" required>
                </div>

                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" value="<?= $item['quantity'] ?>" id="quantity" class="form-control mb-3" step="any" required>
                <select name="user_id" id="user_id" class="form-select mb-3">
                    <option value="" hidden>Select User Name</option>
                    <?php
                    // print_r(getAllSections());
                    $all_users = getAllUsers();
                    while ($user = $all_users->fetch_assoc()) {
                        // fetch_assoc() = transform the object result into an associative array
                        // print_r($section);
                        if ($user['id'] == $item['user_id']) {


                    ?>
                            <option value="<?= $user['id'] ?>" selected><?= $user['username'] ?></option>
                        <?php
                        } else {
                        }
                        ?>
                        <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                    <?php
                    }
                    ?>

                </select>
                <img src="assets/images/<?= $item['photo'] ?>" alt="<?= $item['photo'] ?>" style="width: 15%">
                <input type="file" name="photo" class="form-control mb-3" aria-label="Choose Photo">
                <a href="view-item.php" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" name="btn_update" class="btn btn-success px-5">Update</button>
            </form>
        </div>
    </main>


    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>