<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries Visited</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="" method="post" class="w-25 bg-light text-center mx-auto mt-4">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h2 class="my-1">Countries Visited</h2>
            </div>
            <div class="card-body">
                <label for="numcountry" class="form-control my-2">Number of Countries</label>
                <input type="number" name="numcountry" id="numcountry">
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-danger mt-2 w-100">
            </div>
        </div>
    </form>

</body>

</html>






<!-- CDN JS Bootstrap -->
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
</script>

<?php

// 1st function
function numCountry($numcountry)
{
    echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
    echo "<form method='post'>";
    for ($count = 0; $count < $numcountry; $count++) {
        echo "<input type='text' class='form-control mx-auto my-1' name='countries[]'>";
    }
    echo "<input type='submit' value='Save' class='btn btn-danger mt-2' name='save'>";
    echo "</form>";
    echo "</div>";
}

// 1st isset
if (isset($_POST['submit'])) {
    $numcountry = $_POST['numcountry'];
    numCountry($numcountry);
}

// 2nd function
function displayCountries($countries)
{
    echo "<div class='card card-body bg-success text-white mx-auto mt-4 w-25'>";
    echo "<h6>You have been to: <h6><br>";
    foreach ($countries as $country) {
        echo $country . "<br>";
    }
}

// 2nd isset
if (isset($_POST['save'])) {
    $countries = $_POST['countries'];
    displayCountries($countries);
}
?>