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
    <div class="card w-50 mx-auto">
        <div class="card-header  bg-dark">
            <h2 class="text-center text-white">if-increasing-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="First Number" name="num1" id="num1">

                <input type="number" class="form-control mb-3" placeholder="Second Number" name="num2" id="num2">

                <input type="number" class="form-control" placeholder="Third Number" name="num3" id="num3">

                <input type="submit" class="btn mt-3 btn-danger text-center w-100" name="btn_submit" value="Compute">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['btn_submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        echo "<div class='card card-footer bg-secondary text-white text-center mx-auto w-50'>";
        echo "1st #: $num1<br>";
        echo "2nd #: $num2<br>";
        echo "3rd #: $num3<br>";
        if ($num1 > $num2 && $num2 > $num3) {
            echo "<div class='btn mt-3 btn-info text-center  text-white w-100'>Decreasing</div>";
        } elseif ($num3 > $num2 && $num2 > $num1) {
            echo "<div class='btn mt-3 btn-info text-center  text-white w-100'>Increasing</div>";
        } else {
            echo "<div class='btn mt-3 btn-info text-center text-white w-100'>Neither</div>";
        }
    }




    ?>

</body>

</html>