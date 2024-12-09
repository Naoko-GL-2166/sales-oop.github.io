<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant or Vowel</title>
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
            <h6>if-consonant-vowel-act</h6>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="text" class="form-control mb-3" placeholder="Enter a letter" name="letter" id="letter">


                <input type="submit" class="btn mt-3 btn-danger w-100 text-center" name="check" value="Check">
            </form>


        </div>
    </div>



</body>

</html>



<?php

function checkLetter($letter)
{
    if ($letter == "a" || $letter == "e" || $letter == "i" || $letter == "o" ||  $letter == "u") {

        echo "<div class='card card-body bg-success text-center text-white mx-auto mt-4 w-25'>
                        Letter: $letter<br>
                        <h5>Vowel</h5>
                        </div>";
    } elseif (is_numeric($letter)) {
        echo "<div class='card card-body bg-danger text-center text-white mx-auto mt-4 w-25'>
    Number: $letter<br>
    <h5>You entered a Number!</h5>
    </div>";
    } elseif (strlen($letter) > 1) {
        echo "<div class='card card-body bg-danger text-center text-white mx-auto mt-4 w-25'>
    Characters: $letter<br>
    <h5>Please Enter One Letter Only!</h5>
    </div>";
    } else {
        echo "<div class='card card-body bg-success text-center text-white mx-auto mt-4 w-25'>
    Letter: $letter<br>
    <h5>Consonant</h5>
    </div>";
    }
}


if (isset($_POST['check'])) {
    $letter = $_POST['letter'];


    checkLetter($letter);
}


?>