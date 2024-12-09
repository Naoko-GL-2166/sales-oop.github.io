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
    <div class="card w-50 mx-auto">
        <div class="card-header  bg-secondary">
            <h2 class="text-center text-white">if-consonant-vowel-act</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" class="mx-auto text-center">
                <input type="text" class="form-control mb-3" placeholder="Enter a letter" name="let1" id="let1">


                <input type="submit" class="btn mt-3 btn-danger w-100 text-center" name="check" value="Check">
            </form>


        </div>
    </div>







    <?php


    if (isset($_POST['check'])) {
        $let1 = $_POST['let1'];


        echo "<div class='card card-footer bg-success text-white text-center mx-auto w-50'>";

        if (strlen($let1) >= 2 || !ctype_alpha($let1)) {
            echo "ERROR";
        } elseif (in_array(strtolower($let1), ['a', 'e', 'i', 'o', 'u'])) {
            echo "Letter: $let1 <br>" .
                "Vowel";
        } else {
            echo
            "Letter: $let1 <br>" .
                "Consonant";
        }
    }


    ?>











</body>

</html>