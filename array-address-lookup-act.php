<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
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
        <div class="card-header  bg-success">
            <h2 class="text-white">array-address-lookup-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto">
                <?php $address = ['Mark' => 'New York', 'Yoko' => 'Heidelberg', 'Lin' => 'Taipei', 'Ippei' => 'Napoli', 'Tom' => 'Tokyo'];
                // display using select element
                echo "<form method='post'>";
                echo "<select name='name'>";
                echo "<option value='' hidden>Select Name</option>";
                foreach ($address as $name => $p_address) {
                    echo "<option value='$name lives in $p_address'>$name</option>";
                }

                echo "</select><br>";
                ?>
                <input type="submit" class="btn btn-sm my-3 btn-success" name="submit" value="Submit">
            </form>


            <?= "</form>";


            ?>



            <?php

            if (isset($_POST['submit'])) {
                $array_address = $_POST['name'];

                echo "<div class='card-footer'>
                        <p class='h4 text-center'>$array_address</p>
                        </div>";
            }

            ?>
        </div>
    </div>









</body>

</html>