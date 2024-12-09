<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset Function</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>isset()</h1>



    <form action="" method="post" class="w-25 mx-auto">
        <label for="fullname">Full Name</label>
        <input type="text" class="form-control" name="fullname" id="fullname">

        <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" id="email">

        <input type="password" class="form-control" name="password" id="type your password here">
        <input type="submit" class="btn btn-primary" name="btn_submit" value="SEND">
    </form>


</body>

</html>

<?php
// if(isset())    --> checks if the user clicks the botton in the form

if (isset($_POST['btn_submit'])) {

    echo "<p>You clicked the button</p>";

    // $_POST[''];

    echo "<h2>Full Name:" . $_POST['fullname'] . "</h2>";
    echo "<h2>Email Address:" . $_POST['email'] . "</h2>";


    $full_name = $_POST['fullname'];
    $email = $_POST['email'];



    echo "<h1 class='bg-primary text-center w-50 mx-auto mt-3'>My name is $full_name and email is $email.</h1>";
}
?>