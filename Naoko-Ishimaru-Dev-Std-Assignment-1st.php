<?php
session_start();
?>
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
    <div class="container">
        <form action="" method="post" class="my-3 text-center">
            <div class="card w-75 my-4" id="index.php">
                <div class="card-body bg-dark text-white fw-bold">
                    <h3>How many products do you want to buy?</h3><br>
                    <input type="number" min=1 name="num_prod" class="my-1">
                </div>
                <div class="card-footer border-0 bg-dark">
                    <input type="submit" name="btn_submit" value="Submit" class="btn btn-primary w-40 mb-4 text-center">
                </div>
            </div>




            <?php

            if (isset($_POST['btn_submit']) && isset($_POST['num_prod']) && $_POST['num_prod'] !== '') {
                $num_prod = $_POST['num_prod'];

                echo "<div class='card w-75'>
                        <div class='card-body text-center bg-dark'>
                         <h3 div class= 'text-white'>Details of the Products</h3><br>
                          <form-action='' method='post'>
                           <div class='row'>
                               <div class='col'>
                                  <div class='text-start text-warning fs-4'>Product Name</div>
                                </div>
                                <div class='col'>
                                   <div class='text-end text-warning fs-4'>Product Price</div>;
                                </div>
                             </div>";
                for ($i = 1; $i <= $num_prod; $i++) {
                    echo "
                <div class='row'>
                    <div class='col g-3'>
                         <input type='text' name='products[$i][name]' class='form-control' placeholder='Product $num_prod'>
                    </div>
                    <div class='col g-3'>
                         <input type='number' name='products[$i][price]' class='form-control' placeholder='Product $num_prod Price' min='0'><br>
                    </div>
                </div>";
                }

                echo "<button type='submit' name='save' class='btn btn-warning btn-lg w-40'>Save</button>
          </form>
          </div>
          </div>";
            }



            if (isset($_POST['save'])) {
                $products = $_POST['products'];
                $num_prod = $_POST['num_prod'];

                echo "<div class='card w-75'>
                        <div class='card-body text-center bg-dark'>
                         <h2 div class= 'text-white'>Buy Quantity</h2><br>
                          <form-action='' method='post'>
                            <div class='row'>
                                <div class='col'>
                                   <div class='text-start text-danger fs-4'>Product Price</div>
                                </div>
                                <div class='col'>
                                   <div class='text-end text-danger fs-4'>Product Quantity</div>;
                                </div>
                            </div>";
                foreach ($products as $i => $product) {
                    echo "<div class='row'>
                                <div class='col g-3'>
                                    <div class='text-start text-white'>{$product['name']}'s Price</div>
                                    <input type='hidden' name='products[$i][name]' value='{$product['name']}'>
                                    <input type='number' name='products[$i][price]' value='{$product['price']}' class='form-control' readonly>
                                </div>
                                <div class='col g-3'>
                                    <div class='text-end text-white'>{$product['name']}'s Quantity</div>
                                    <input type='number' name='products[$i][quantity]' class='form-control' min='1'><br>
                                </div>
                            </div>}";
                }
                echo "<button class='btn btn-info w-50 my-4'><i class='fa-solid fa-tag'></i><span class='fst-italic'> avail 10% discount for every 10pcs /<br> quantities EACH PRODUCT!</span></button>
            <button type='submit' name='compute' class='btn btn-danger w-100'>Compute</button>
          </form>
          </div>
          </div>";
            }


            if (isset($_POST['compute'])) {
                $products = $_POST['products'];
                $_SESSION['products'] = $products;
                $grandTotal = 0;


                function escape_html($string)
                {
                    $search = ['&', '"', "'", '<', '>'];
                    $replace = ['&amp;', '&quot;', '&#39;', '&lt;', '&gt;'];
                    return str_replace($search, $replace, $string);
                }
            ?>

                <div class="card w-75 card-body text-center bg-dark w-50 my-5">
                    <h2 class="text-center text-white bg-dark py-3">Sales Summary</h2>
                    <table class="table table-dark table-borderless text-center">
                        <tr>
                            <th class="text-warning">Product</th>
                            <th class="text-warning">Price</th>
                            <th class="text-warning">Quantity</th>
                            <th class="text-warning">Discount</th>
                            <th class="text-warning">Total</th>
                        </tr>
                        <tbody>
                            <?php
                            foreach ($products as $product) {
                                $name = escape_html($product['name']);
                                $price = number_format((float)$product['price'], 2, '.', '');
                                $quantity = (int)$product['quantity'];

                                $discount = 0;
                                if ($quantity > 10) {
                                    $discount = $price;
                                }
                                $discount = number_format((float)$discount, 2, '.', '');

                                $subtotal = ($price * $quantity) - $discount;
                                $subtotal = number_format((float)$subtotal, 2, '.', '');

                                $grandTotal += $subtotal;
                            ?>
                                <tr>
                                    <td class="text-white"><?= $name ?></td>
                                    <td class="text-white">$<?= $price ?></td>
                                    <td class="text-white"><?= $quantity ?></td>
                                    <td class="text-white"><?= $discount > 0 ? '$' . $discount : 'no discount' ?></td>
                                    <td class="text-white">$<?= $subtotal ?></td>
                                </tr>
                            <?php
                            }
                            $grandTotal = number_format((float)$grandTotal, 2, '.', '');
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end text-danger fw-bold">Grand Total:</td>
                                <td>$<?= $grandTotal ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-center">
                        <a href="http://localhost/dev1-php/Naoko-Ishimaru-Dev-Std-Assignment-1st.php" class="btn btn-secondary mt-3">Back to homepage</a>
                    </div>
                </div>
            <?php
            }
            ?>

        </form>

    </div>
    <!-- CDN JS Bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
</body>

</html>