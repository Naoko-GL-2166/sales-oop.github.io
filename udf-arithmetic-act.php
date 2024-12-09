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
</head>

<body>
    <div class="card w-50 mx-auto">
        <div class="card-header">
            <h2 class="text-center">pg-arithmetic-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto">
                <input type="number" class="form-control mb-3" placeholder="First Number" name="fnumber" id="fnumber">

                <input type="number" class="form-control" placeholder="Second Number" name="snumber" id="snumber">

                <input type="submit" class="btn w-100 mt-3 btn-primary" name="btn_submit" value="Compute">
            </form>


        </div>
    </div>







    <?php
    // if(isset())    --> checks if the user clicks the botton in the form

    if (isset($_POST['btn_submit'])) {
        $fnumber = $_POST['fnumber'];


        $snumber = $_POST['snumber'];


    ?>

        <div class="card border-0 w-50 bg-secondary text-center text-white mx-auto mt-3 fw-bold">
            <div class="card-body">
                <?php echo "<p>First Number: " . $_POST['fnumber'] . "</p>";
                echo "<p>Second Number: " . $_POST['snumber'] . "</p>";


                ?>
            </div>
        </div>

        <div class="card border-0 ">
            <div class="card-body">


                <div class='card card-body bg-primary text-center text-white mx-auto mt-3 w-50 fw-bold'>
                    <p>sum <?= add($fnumber, $snumber) ?></p>
                    <p>difference <?= substract($fnumber, $snumber) ?></p>
                    <p>product <?= multiply($fnumber, $snumber) ?></p>
                    <p>quotient <?= devide($fnumber, $snumber) ?></p>

                </div>";





            <?php
        }
            ?>

            <?php
            function add($fnumber, $snumber)
            {
                echo $fnumber + $snumber;
            }

            function substract($fnumber, $snumber)
            {
                return $fnumber - $snumber;
            }

            function multiply($fnumber, $snumber)
            {
                return $fnumber * $snumber;
            }

            function devide($fnumber, $snumber)
            {
                return $fnumber / $snumber;
            }

            ?>





</body>

</html>