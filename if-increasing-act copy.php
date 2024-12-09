<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increasing or Decreasing</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="card w-25 mx-auto text-dark text-center bg-light mt-3">
        <div class="card-header  bg-secondary text-white">
            <h6>if-increasing-decreasing-act</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="number" class="form-control" placeholder="First Number" name="num1" id="num1">

                <input type="number" class="form-control my-2" placeholder="Second Number" name="num2" id="num2">

                <input type="number" class="form-control" placeholder="Third Number" name="num3" id="num3">

                <input type="submit" class="btn mt-3 btn-danger w-100" name="check" value="Check">
            </form>


        </div>
    </div>


</body>

</html>




<?php

function numberOrdered($num1, $num2, $num3)
{
    echo "<div class= 'fw-bold bg-info'>";
    if ($num1 < $num2 && $num2 < $num3) {
        echo "Increasing";
    } elseif ($num1 > $num2 && $num2 > $num3) {
        echo "Decreasing";
    } else {
        echo "Neither";
    }
    echo "</div>";
}

if (isset($_POST['check'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    echo "<div class='card card-body bg-secondary text-white text-center mx-auto mt-3 w-25'>";
    echo "1st #: $num1<br>" .
        "2nd #: $num2<br>" .
        "3rd #: $num3<br>";

    numberOrdered($num1, $num2, $num3);
}




?>