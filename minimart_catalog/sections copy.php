<?php

require "connection.php";

// Insert record/data
function createSection($name)
{
    // connection to database
    $conn = connection();

    // SQL Code: create record
    $sql = "INSERT INTO `sections`(`name`)VALUE(`$name`)";

    // execute / run
    if ($conn->query($sql)) {
        // successful
        header("refresh: 0");
    } else {
        // error
        die("Error adding new product sections:" . $conn->error);
    }
}

// get all records / data
function getAllSections()
{
    $conn = connection();

    // SQL Code: get all records
    $sql = "SELECT * FROM `sections`";

    // execute
    if ($result = $conn->query($sql)) {
        return $result;
    } else {
        die("Error retrieving all sections: " . $conn->error);
    }
}

// delete single record based on id
function deleteSpecificSection($section_id)
{
    $conn = connection();

    // SQL Code: delete single record
    $sql = "DELETE FROM `sections` WHERE id = $section_id";


    // execute
    if ($conn->query($sql)) {
        header("refresh: 0");
    } else {
        die("Error deleting the product section: " . $conn->error);
    }
}



// get data from the form
if (isset($_POST['btn_add'])) {
    $name = $_POST['name'];
    createSection($name);
}
// isset to delete record
if (isset($_POST['btn_delete'])) {
    $section_id = $_POST['btn_delete'];
    // var_dump($section_id);
    deleteSpecificSection($section_id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <main class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <h2 class="fw-light mb-3">Sections</h2>

                <!-- Form -->
                <div class="mb-3">
                    <form action="" method="post">
                        <div class="row gx-2">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Add a new section here..." max="50" required autofocus>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="btn_add" class="btn btn-info w-100 fw-bold">
                                    <i class="fa-solid fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Table -->
                <table class="table table-sm align-middle text-center">
                    <thead class="table-info">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // print_r(getAllSections());
                        $all_sections = getAllSections();
                        while ($section = $all_sections->fetch_assoc()) {
                            // fetch_assoc() = transform the object result into associative array
                            // print_r($section);
                        ?>







                            <tr>
                                <td><?= $section['id'] ?></td>
                                <td><?= $section['name'] ?></td>
                                <td>
                                    <form action="" method="post">
                                        <button type="submit" name="btn_delete" value="<?= $section['id'] ?>" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>