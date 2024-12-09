<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="card w-80 mx-auto">
        <div class="card-header">
            <h2 class="text-center">pg-day-act</h2>
        </div>
        <div class="card-body text-center">
            <form action="" method="post" class="mx-auto">
                <input type="submit" class="btn my-2 btn-primary" name="btn_day" value="Monday">

                <input type="submit" class="btn my-2 btn-secondary" name="btn_day" value="Tuesday">

                <input type="submit" class="btn my-2 btn-success" name="btn_day" value="Wednesday">

                <input type="submit" class="btn my-2 btn-danger" name="btn_day" value="Thursday">

                <input type="submit" class="btn my-2 btn-warning" name="btn_day" value="Friday">

                <input type="submit" class="btn my-2 btn-dark" name="btn_day" value="Saturday">

                <input type="submit" class="btn my-2 btn-info" name="btn_day" value="Sunday">
            </form>


        </div>
    </div>




</body>

</html>

<?php
// if(isset())    --> checks if the user clicks the botton in the form

if (isset($_POST['btn_day'])) {
    $day = $_POST['btn_day'];
    // echo "<p>You clicked the button</p>";

    // // $_POST[''];

    // echo "<h2>Full Name:" . $_POST['fullname'] . "</h2>";
    // echo "<h2>Email Address:" . $_POST['email'] . "</h2>";


    // $full_name = $_POST['fullname'];
    // $email = $_POST['email'];



    echo "<div class='card card-body bg-light text-dark text-center mx-auto mt-3 w-25 fw-bold display-6'>$day</div>";
}
?>