<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ends With</title>
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
            <h2 class="text-center text-white">for-end-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="Enter Number" name="num1" id="num1">


                <input type="submit" class="btn mt-3 btn-danger w-100 text-center" name="btn_submit" value="Submit">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['btn_submit'])) {
        $num1 = $_POST['num1'];

        $i = 1;
        echo "<div class='card card-footer bg-success text-white text-center mx-auto w-50'>";

        while ($i <= $num1) {
            //loop body statement
            echo $i . " | ";

            $i++; //update statement
        }
    }



    ?>




</body>

</html>