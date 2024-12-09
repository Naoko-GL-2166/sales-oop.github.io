<?php
session_start();
require "connection.php";

// SQL Code: get all records
function getAllSections()
{
    $conn = connection();

    // SQL Code: get all records
    $sql = "SELECT * FROM `sections`";

    // execute
    if ($result = $conn->query($sql)) {
        return $result;
    } else {
        die("Error retrieving all sections: " . $conn->error);
    }
}

// get single product
function getSpecificRecord($id)
{
    $conn = connection();

    // SQL Code: get single record
    $sql = "SELECT * FROM `products` WHERE id = $id";

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

$product = getSpecificRecord($id);
print_r($product);

// update specific product
function updateSpecificRecord($id, $name, $description, $price, $section_id)
{
    $conn = connection();

    // SQL Code: update single record
    $sql = "UPDATE `products` SET `name`= '$name', `description` = '$description', `price` = '$price', `section_id` = '$section_id' WHERE id = $id";

    if ($conn->query($sql)) {
        header("location: products.php");
        exit;
    } else {
        die("Error updating the record: " . $conn->error);
    }
}


// get the data from the form
if (isset($_POST['btn_save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $section_id = $_POST['section_id'];
    $id = $_GET['id'];

    updateSpecificRecord($id, $name, $description, $price, $section_id);
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
            <h2 class="card-title h4 mb-0">Update Product</h2>
        </div>
        <div class="card-body">
            <form method="POST">
                <label for="name" class="form-label small">Name</label>
                <input type="text" value="<?= $product['name'] ?>" name="name" id="name" class="form-control mb-2" required autofocus>

                <label for="description" class="form-label small">Description</label>
                <textarea name="description" id="description" class="form-control mb-2" cols="30" rows="10" required><?= $product['description'] ?></textarea>

                <label for="price" class="form-label">Price</label>
                <div class="input-group mb-2">
                    <div class="input-group-text">$</div>
                    <input type="number" value="<?= $product['price'] ?>" name="price" id="price" class="form-control" step="any" required>
                </div>

                <label for="section-id" class="form-label small">Section</label>
                <select name="section_id" id="section-id" class="form-select mb-5">
                    <option value="" hidden>Select Section</option>

                    <?php
                    // print_r(getAllSections());
                    $all_sections = getAllSections();
                    while ($section = $all_sections->fetch_assoc()) {
                        // fetch_assoc() = transform the object result into an associative array
                        // print_r($section);
                        if ($section['id'] == $product['section_id']) {


                    ?>
                            <option value="<?= $section['id'] ?>" selected><?= $section['name'] ?></option>
                        <?php
                        } else {
                        }
                        ?>
                        <option value="<?= $section['id'] ?>"><?= $section['name'] ?></option>
                    <?php
                    }
                    ?>

                </select>
                <a href="products.php" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" name="btn_save" class="btn btn-success px-5">SAVE</button>
            </form>
        </div>
    </main>


    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>