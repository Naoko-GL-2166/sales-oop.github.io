<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array with input</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="" method="post" class="w-50 text-center mx-auto mt-4">
        <div class="card">
            <div class="card-header">
                <h2>Countries Visited</h2>
            </div>
            <div class="card-body">
                <label for="num_countries" class="form-control">Number of Countries</label>
                <input type="number" name="num_countries" id="num_countries">
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-danger w-100">
            </div>
        </div>
    </form>

    <?php

    // using delimeter
    // First isset
    if (isset($_POST['submit'])) {
        $num_countries = $_POST['num_countries'];

    ?>

        <form action="" method="post" class="w-50 bg-success text-white p-3 text-center mx-auto mt-4">
            <?php
            for ($i = 1; $i <= $num_countries; $i++) {
            ?>
                <span>Name of Country:</span>
                <input type="text" name="name_countries[]"><br><br>

            <?php
            }
            ?>

            <input type="submit" name="save" value="SAVE" class="btn btn-danger">
        </form>

    <?PHP
    }

    ?>


    <?php

    // Second isset
    if (isset($_POST['save'])) {
        $name_countries = $_POST['name_countries'];
    } else {
        $name_countries = [];


        print_r($name_countries);
        // individual display
    }
    ?>


    <!-- CDN JS Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>