<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredo Cafe</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="" method="post" class="w-50 mx-auto mt-4">
        <div class="card">
            <div class="card-header">
                <div class="display-3">How many people are going to eat?</div>
            </div>
            <div class="card-body">
                <input type="number" name="num" id="num">
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" value="SUBMIT" class="btn btn-success w-50">
            </div>
        </div>
    </form>

    <?php

    // using delimeter
    // First isset
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

    ?>

        <form action="" method="post" class="w-50 p-3 text-center mx-auto mt-4">
            <div class="display-3">Ages of the people attending</div>
            <?php
            for ($i = 1; $i <= $num; $i++) {
            ?>
                <input type="number" name="age[] form-control" placeholder="Enter age here"><br><br>

            <?php
            }
            ?>

            <input type="submit" name="save" value="SAVE" class="btn btn-primary w-50">
        </form>

    <?PHP
    }

    ?>


    <?php

    // Second isset
    if (isset($_POST['save'])) {
        $age = $_POST['age'];



        print_r($age);
        // individual display

    ?>

    <?php

        $price = 0;

        foreach ($age as $personAge) {
            if (0 <= $personAge && $personAge <= 5) {
                $price += 0;
            } elseif (6 <= $personAge && $personAge <= 10) {
                $price += 325 * 0.9;
            } elseif (11 <= $personAge  && $personAge <= 59) {
                $price += 325;
            } else {
                $price += 325 * 0.95;
            }
        }
        echo "<p>Total cost: $price</p>";
    }

    ?>



    <!-- CDN JS Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>