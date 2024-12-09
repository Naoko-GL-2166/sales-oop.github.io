<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        th,
        td {
            width: 50%;
        }
    </style>
</head>



<body>
    <div class="card text-dark text-center bg-light w-25 mx-auto mt-3">

        <div class="card-header">
            <h6>pg-arithmetic-act</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="number" class="form-control" name="num1" id="num1" placeholder="First Number">

                <input type="number" class="form-control my-3" name="num2" placeholder="Second Number">

                <input type="submit" class="btn mt-3 btn-primary" name="compute" value="Compute">
                </input>
            </form>


        </div>
    </div>




    <!-- 1st answer -->
    <?php
    if (isset($_POST['compute'])) {
        $num_1 = $_POST['num1'];
        $num_2 = $_POST['num2'];
        $sum = $num_1 + $num_2;
        $diff = $num_1 - $num_2;
        $prod = $num_1 * $num_2;
        $quot = $num_1 / $num_2;
    ?>

        <div class="card card-body bg-primary text-center mx-auto mt-3 w-25">
            <div class="table-responsive-md">
                <table class="table text-white">
                    <thread class="table text-white">
                        <tr>
                            <th>First Number</th>
                            <th>Second Number</th>
                        </tr>

                        <tr>
                            <th><?= $num_1 ?></th>
                            <th><?= $num_2 ?></th>
                        </tr>
                    </thread>

                    <tr>
                        <th>The sum is</th>
                        <th><?= $sum ?></th>
                    </tr>

                    <tr>
                        <th>The difference is</th>
                        <th><?= $diff ?></th>
                    </tr>

                    <tr>
                        <th>The quotient is</th>
                        <th><?= $quot ?></th>
                    </tr>
                </table>



            </div>
        </div>


    <?php
    }
    ?>

</body>

</html>




<!-- 2nd answer-->
<?php
if (isset($_POST['compute'])) {
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $sum = $num_1 + $num_2;
    $diff = $num_1 - $num_2;
    $prod = $num_1 * $num_2;
    $quot = $num_1 / $num_2;


    echo "<div class='card card-body bg-secondary text-white text-center mx-auto mt-3 w-25'>
        First Number: $num_1<br>
        Second Number: $num_2
        </div>";

    echo "<div class='card card-body bg-primary text-white text-center mx-auto mt-3 w-25'>
        The sum is: $sum<br>
        The difference is: $diff<br>
        The difference is: $prod<br>
        The quotient is: $quot</div>";
}
?>

</body>

</html>