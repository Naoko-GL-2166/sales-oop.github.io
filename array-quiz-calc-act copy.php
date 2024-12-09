<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array with input</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="" method="post" class="w-50 mx-auto mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3">Quiz Calculator</h1>
            </div>
            <div class="card-body">
                <input type="number" name="num_quiz" class="form-control my-1" placeholder="Enter number of quizzes" max="10">
            </div>
            <div class="card-footer">
                <input type="submit" name="btn_generate" value="Generate" class="btn btn-success form-control my-3">
            </div>
        </div>


        <?php

        // using delimeter
        // First isset
        if (isset($_POST['btn_generate'])) {
            $num_quiz = $_POST['num_quiz'];

            echo "<div class='card mt-2 w-100 mx-auto border-0'>
                        <div class='card-body'>
                        <form-action='' method='post'>";
            for ($i = 1; $i <= $num_quiz; $i++) {
                echo "Quiz $i";
                echo "<input type='number' name='grades[]'class='form-control my-2' min='0' max='50'>
            <br>";
            }
            echo "<button type='submit' name='btn_calculate' class='btn btn-primary form-control'>Calculate Average</button>
        </form>
        </div>
        </div>";
        }


        if (isset($_POST['btn_calculate'])) {
            $grades = $_POST['grades'];

            $sum = 0; //recieve the total after the loop stop

            foreach ($grades as $grade) {
                $sum += $grade;
                //$sum = $sum + $grade;
            }

            $average = $sum / count($grades);

            echo "<div class='card-footer'>";
            foreach ($grades as $grade) {
                echo "<h5>$grade</h5>";
            }
            echo "
            <p class ='h4'>Sum: " . $sum . "
            <p class ='h4'>Average: " . round($average, 2) . "</p>
            </div>";
        }
        ?>
    </form>

    <!-- CDN JS Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>