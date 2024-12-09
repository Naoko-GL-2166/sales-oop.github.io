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
    <div class="card text-dark text-center bg-light w-25 mx-auto">
        <div class="card-header  bg-secondary text-white">
            <h6>if-leap-act</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="number" class="form-control" placeholder="Entry any Year!" name="yr" id="yr">


                <input type="submit" class="btn mt-3 btn-danger w-100" name="check" value="Check">
            </form>


        </div>
    </div>



</body>

</html>


<div class="fw-bold">
    <?php


    function checkYear($year)
    {
        if ($year == null) {
            echo "<p class='text-center'>Enter year!</p>";;
        } else {
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        echo "<div class='card card-body bg-success text-white text-center mx-auto mt-3 w-25'>
                        $year It is a Leap Year!
                        </div>";
                    } else {
                        echo "<div class='card card-body bg-warning text-white text-center mx-auto mt-3 w-25'>
                        $year It is not a Leap Year!
                        </div>";
                    }
                } else {
                    echo "<div class='card card-body bg-success text-white text-center mx-auto mt-3 w-25'>
                        $year It is a Leap Year!
                        </div>";
                }
            } else {
                echo "<div class='card card-body bg-warning text-white text-center mx-auto mt-3 w-25'>
                        $year It is not a Leap Year!
                        </div>";
            }
        }
    }


    if (isset($_POST['check'])) {
        $year = $_POST['yr'];


        checkYear($year);
    }


    ?>
</div>