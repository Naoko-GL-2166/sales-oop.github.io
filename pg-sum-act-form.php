<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
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
            <h2 class="text-center">pg-sum-act</h2>
        </div>
        <div class="card-body">
            <form action="pg-sum-act.php" method="post" class="mx-auto">
                <input type="number" class="form-control mb-3" placeholder="First Number" name="fnumber" id="fnumber">

                <input type="number" class="form-control" placeholder="Second Number" name="snumber" id="snumber">

                <input type="submit" class="btn w-100 mt-3 btn-primary" name="btn_submit" value="Compute">
            </form>


        </div>
    </div>




</body>

</html>