<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Leap Year?</title>
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
        <div class="card-header  bg-secondary">
            <h2 class="text-center text-white">if-leap-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="Entry any Year" name="num1" id="num1">


                <input type="submit" class="btn mt-3 btn-danger w-100 text-center" name="check" value="Check">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['check'])) {
        $num1 = $_POST['num1'];


        echo "<div class='card card-footer bg-success text-white text-center mx-auto w-50'>";

        if ($num1 % 4 == 0 || $num1 % 100 != 0 && $num1 % 400 == 0) {
            echo
            $num1 . " is a Leap Year!";
        } else {
            echo
            $num1 . " is not a Leap Year!";
        }
    }


    ?>




</body>

</html>