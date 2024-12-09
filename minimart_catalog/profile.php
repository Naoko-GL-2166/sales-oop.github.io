<?php
session_start();
require "connection.php";

// get specific user 
function getUser()
{
    $conn = connection();

    // get id from session
    $id = $_SESSION['user_id'];


    // SQL Code: get single record
    $sql = "SELECT * FROM `USERS` WHERE id = $id";

    if ($result = $conn->query($sql)) {
        // return only one record
        return $result->fetch_assoc();
        // return an associative array
    } else {
        die("Error retrieving a record: " . $conn->error);
    }
}

// print_r(getUser());
$user = getUser();



// /update user photo
function updatePhoto($id, $photo_name, $photo_tmp)
{
    $conn = connection();

    // SQL Code: update photo
    $sql = "UPDATE `users` SET `photo` = '$photo_name' WHERE id = $id";

    if ($conn->query($sql)) {
        // location of the photo to be saved
        $destination = "assets/images/$photo_name";

        // move the file on the destination
        move_uploaded_file($photo_tmp, $destination);
        header("refresh: 0");
    } else {
        die("Error uploading photo: " . $conn->error);
    }
}
// Properties of image/photo
/**
 *  name = name of the file(naruto.jpg)
 *  tmp_name = path or location of the file inside the temporary strage in your computer.
 */

//  get the data from the form
if (isset($_POST['btn_upload_photo'])) {
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $id = $_SESSION['user_id'];

    updatePhoto($id, $photo_name, $photo_tmp);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
        <div class="card w-50 mx-auto">

            <?php
            if ($user['photo']) {
            ?>
                <img src="assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="card-img-top">

            <?php
            } else {
            ?>
                <i class="fa-regular fa-user profile-icon text-center"></i>
            <?php
            }
            ?>


            <div class="card-body">
                <div class="mt-2 text-center">
                    <p class="lead fw-bold mb-0">
                        <?= $_SESSION['username'] ?>
                    </p>
                    <p class="lead">
                        <?= $_SESSION['full_name'] ?>
                    </p>
                </div>

                <form method="post" enctype="multipart/form-data">
                    <div class="input-group mb-2">
                        <input type="file" name="photo" class="form-control" aria-label="Choose Photo">
                        <button type="submit" class="btn btn-outline-secondary" name="btn_upload_photo">Update</button>
                    </div>
                </form>


            </div>
        </div>
    </main>


    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>