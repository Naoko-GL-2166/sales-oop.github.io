<?
require "connection.php";

// create a new user
function createUser(
    $first_name,
    $last_name,
    $username,
    $password
) {
    $conn = connection();

    // add password encryption
    $password = password_hash($password, PASSWORD_DEFAULT);

    // SQL code: insert new user
    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`, `password`) VALUES('$first_name', '$last_name', '$username', '$password')";
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                <div class="card-header text-success">
                    <h1 class="card-title h3 mb-0">Create your account</h1>
                </div>
                <div class="card-body">
                    <form method="post">
                        <label for="first-name" class="small">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control mb-2" required autofocus>

                        <label for="last-name" class="small">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="form-control mb-2" required>

                        <label for="username" class="small font-weight-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="15" required>

                        <label for="password" class="small">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-2" required>

                        <label for="confirm-password" class="small">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm-password" class="form-control mb-5">

                        <button type="submit" class="btn btn-success w-100" name="btn_sign_up">Sign up</button>
                    </form>

                    <div class="text-center mt-3">
                        <p class="small">Already have an account? <a href="login.php">Log in.</a></p>
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