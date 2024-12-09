<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>Form Handling</h1>

    <!-- <form action="file2.php" method="get">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname">

        <label for="email">Email Address</label>
        <input type="email" name="email" id="email">

        <input type="password" name="password" id="type your password here">
        <input type="submit" name="btn_submit" value="SEND">
    </form> -->

    <form action="file2.php" method="post" class="w-25 mx-auto">
        <label for="fullname">Full Name</label>
        <input type="text" class="form-control" name="fullname" id="fullname">

        <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" id="email">

        <input type="password" class="form-control" name="password" id="type your password here">
        <input type="submit" class="btn btn-primary" name="btn_submit" value="SEND">
    </form>


</body>

</html>