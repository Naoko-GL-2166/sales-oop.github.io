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
    <div class="card text-dark text-center bg-light w-25 mx-auto">
        <div class="card-header  bg-secondary text-white">
            <h6>for-end-act</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="number" class="form-control" placeholder="Enter Number!" name="num" id="num">


                <input type="submit" class="btn mt-3 btn-danger w-100 text-center" name="btn_submit" value="Submit">
            </form>


        </div>
    </div>







    <?php

    function endsWith($num)
    {

        echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";

        // endsWith($num);
        for ($i = 1; $i <= $num; $i++) {
            echo $i . " ";
        }

        echo "</div>";
        // for($i = 1; $i <= $num; $i++){
        //     echo $i . " ";
        // }
    }



    if (isset($_POST['btn_submit'])) {
        $num = $_POST['num'];

        endsWith($num);
        // for($i = 1; $i <= $num; $i++){
        //     echo $i . " ";
        // }
    }

    ?>




</body>

</html>