<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>udf-arithmetic-act</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        p {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="card w-25 mt-5 mx-auto">
        <div class="card-header">
            <h1 class="h3">Arithmetic</h1>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="row mb-2">
                    <div class="col">
                        <label for="num1">First Number</label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="num1" id="num1">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="num2">First Number</label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="num2" id="num2">
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>
                    </div>
                </div>

            </form>


        </div>
    </div>


</body>

</html>




<?php

if (isset($_POST['btn_submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    echo "<div class='text-center fs-4'>";
    // call to function
    add($num1, $num2);
    difference($num1, $num2);
    product($num1, $num2);
    quotient($num1, $num2);
    echo "</div>";
}


// created function


function add($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "<p>Sum = $sum</p>";
}

function
difference($num1, $num2)
{
    $diff = $num1 - $num2;
    echo "<p>Difference = $diff</p>";
}

function
product($num1, $num2)
{
    $prod = $num1 * $num2;
    echo "<p>Product = $prod</p>";
}

function
quotient($num1, $num2)
{
    $quo = $num1 / $num2;
    echo "<p>Quotient = $quo</p>";
}

?>