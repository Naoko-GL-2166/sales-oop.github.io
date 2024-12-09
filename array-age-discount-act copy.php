<?php
function checkPrice($age)
{
    $rate = 325;

    if ($age >= 0 && $age <= 5) {
        return 0;
    } elseif ($age >= 6 && $age <= 10) {
        $discount = $rate * .1;
        return $rate - $discount;
    } elseif ($age >= 60) {
        return $rate * .95;
    } elseif ($age >= 11 && $age <= 59) {
        return $rate;
    }
}

function total($discounted_price)
{
    $total = 0;
    foreach ($discounted_price as $price) {
        $total += $price;
    }
    return $total;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredo Cafe</title>
    <!-- CDN CSS Bootstrap -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container my-5">
        <form action="" method="post" class="text-center w-50 mx-auto my-4">
            <label class="form-label display-4">How many people are going to eat?</label>
            <input type="number" name="number_of_people" class="form-control form-control-lg text-center border-primary" min="1" required>
            <input type="submit" name="submit" value="Submit" class="btn btn-success w-50 mt-4">

        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $num_of_people = $_POST['number_of_people'];

    ?>
        <hr>
        <div class="w-50 text-center mx-auto">
            <form action="" method="post">
                <label for="" class="display-4 mb-4">Ages of the people attending</label>

                <?php
                for ($i = 0; $i < $num_of_people; $i++) {
                ?>
                    <input type="number" name="age[] form-control mt-1" placeholder="Enter age here"><br><br>

                <?php
                }
                ?>

                <input type="submit" name="save" value="Save" class="btn btn-primary mt-2 text-uppercase w-50">
            </form>
        </div>

    <?php
    }
    if (isset($_POST['save'])) {
        $age_array = $_POST['age'];
        $age_counter = count($age_array);
    ?>

        <div class="w-25 mx-auto">
            <table class="table text-center table-bordered border-dark">
                <thead class="table-dark text-center">
                    <tr>
                        <td>AGE</td>
                        <td>PRICE</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    foreach ($age_array as $age) {
                        $discounted_price[] = checkprice($age);
                    ?>

                        <tr>
                            <td class="text-center"><?php echo $age ?></td>
                            <td class="text-center"><?php echo checkPrice($age) ?></td>

                        </tr>
                    <?php
                    }
                    print_r($discounted_price);
                    ?>
                    <tr class="table-danger text-white border-danger">
                        <td>Total Price</td>
                        <td class="text-end fw-bold"><?= total($discounted_price); ?></td>
                    </tr>
                    <tr class="table-primary text-white border-primary">
                        <td>Number of People</td>
                        <td class="text-end fw-bold">
                            <?= $age_counter ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php
    }
    ?>
    <!-- CDN JS Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>