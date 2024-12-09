<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-row-col-act</title>
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
            <h2 class="text-center text-white">Col Row Activity</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="number" class="form-control mb-3" placeholder="Row" name="row" id="row">

                <input type="number" class="form-control" placeholder="Column" name="col" id="col">

                <input type="submit" class="btn mt-3 btn-danger text-center w-100" name="btn_submit" value="Submit">
            </form>


        </div>
    </div>



    <?php


    if (isset($_POST['btn_submit'])) {
        $row = $_POST['row'];
        $col = $_POST['col'];

        echo "<div class='card card-body bg-success text-white mx-auto w-50 m-1'>";
        echo "Row: " . $row . "<br>Column: " . $col;
        echo "</div>";

        echo "<div class='card card-body bg-success text-white text-center mx-auto w-100 m-1'>";
        echo "<table class='table table-bordered bg-white'>";
        for ($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $col; $j++) {

                echo "<td>";
                echo $i * $j;

                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    }





    ?>


</body>

</html>