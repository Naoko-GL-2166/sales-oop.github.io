<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circumference of a Circle</title>
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
        <div class="card-header  bg-light">
            <h3 class="text-center">Circumference of a Circle</h3>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="Radius" name="r" id="r">


                <input type="submit" class="btn mt-3 btn-primary w-100 text-center" name="btn_submit" value="Submit">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['btn_submit'])) {
        $r = getRadius();
        $circum = calculateCircum($r);
        showCircum($circum);
    }

    function getRadius()
    {
        return $_POST['r'];
        // $_POST['radius']is from the HTML form(user input)
    }

    function calculateCircum($r)
    {
        $circum = 2 * pi() * $r;
        return $circum;
    }

    function showCircum($circum)
    {
        // Output function
        echo "<div class= 'card mx-auto w-25 p-3'>";
        echo "Circumference &asymp; " . round($circum, 3);
        echo "</div>";
    }
    ?>






</body>

</html>