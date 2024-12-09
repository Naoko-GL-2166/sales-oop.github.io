<?php
session_start();
require "connection.php";
// get single product
function getItem($id)
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

$item = getItem($id);
print_r($item);

// delete single record
function deleteItem($id)
{
    $conn = connection();

    // SQL Code: delete single record
    $sql = "DELETE FROM `items` WHERE id = $id";
    if ($conn->query($sql)) {
        header("location: view-items.php");
        exit;
    } else {
        die("Error deleting the specific item: " . $conn->error);
    }
}


// isset to delete record
if (isset($_POST['btn_delete'])) {
    $id = $_GET['id'];

    deleteItem($id);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Item</title>
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

    <main class="card w-25 mx-auto border-0 my-5">
        <div class="card-header bg-white border-0">
            <h2 class="card-title text-center text-danger h4 mb-0">Delete Item</h2>
        </div>

        <div class="card-body">
            <div class="text-center mb-4">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                <p class="fw-bold mb-0">Are you sure you want to delete "<?= $item['item_name'] ?>?"
            </div>

            <div class="row">
                <div class="col">
                    <a href="view-items.php" class="btn btn-secondary w-100">Cancel</a>
                </div>
                <div class="col">
                    <form action="" method="POST">
                        <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </main>


    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>