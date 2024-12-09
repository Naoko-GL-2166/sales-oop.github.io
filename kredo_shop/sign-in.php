<?php
require "connection.php";

// get specific user account
function login($username, $password)
{
    $conn = connection();


    // SQL Code: get single record
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";

    if ($result = $conn->query($sql)) {
        // check username exist
        if ($result->num_rows == 1) {
            // transform into associative array
            $user_row = $result->fetch_assoc();
            if (password_verify($password, $user_row['password'])) {
                // -------SESSION---
                session_start();
                // create session variables
                $_SESSION['user_id'] = $user_row['id'];
                $_SESSION['username'] = $user_row['username'];

                header("location:add-item.php");
                exit;
            } else {
                echo "<p class='text-center text-danger'>Incorrect Password</p>";
            }
        } else {
            echo "<p class='text-center text-danger'>Username not found</p>";
        }
    } else {
        die("Error with the query: " . $conn->error);
    }
}


// isset to get data from the form
if (isset($_POST['btn_log_in'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 mx-auto my-auto p-0">
                <div class="card-header text-primary">
                    <h1 class="card-title text-center mb-0">Kredo Shop</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">


                        <label for="username" class="small fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required autofocus>

                        <label for="password" class="small">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-2" required autofocus>


                        <button type="submit" class="btn btn-primary w-100" name="btn_log_in">Log in</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="sign-up.php" class="small text-decoration-none">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


















    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>