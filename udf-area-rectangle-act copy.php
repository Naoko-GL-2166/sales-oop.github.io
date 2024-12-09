<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="card w-25 mx-auto">
        <div class="card-header  bg-secondary">
            <h5 class="text-center text-white">Area of Rectangle</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="Enter Length" name="num1" id="num1">

                <input type="number" class="form-control" placeholder="Enter Width" name="num2" id="num2">

                <input type="submit" class="btn mt-3 btn-danger text-center" name="btn_submit" value="Compute">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['btn_submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2']; //INPUT

        // call function
        $area = calculateArea($num1, $num2); //PROCESS
        desplayArea($area, $num1, $num2); //OUTPUT
        desplayArea(calculateArea($num1, $num2), $num1, $num2);
    }

    // PROCESS
    function
    calculateArea($num1, $num2)
    {
        $area = $num1 * $num2;
        return $area;
    }

    // OUTPUT
    function desplayArea($area, $num1, $num2)
    {
        echo "<div class='card mx-auto w-25 mt-3 p-3'>
        <p>num1 = $num1</p>
        <p>num2= $num2</p>
        <p class= 'h5'> Area of rectangle = $area</p>
        </div>";
    }
    ?>




</body>

</html>