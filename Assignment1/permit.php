<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Permits</title>
</head>
<body>
        
    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

        <div>
            <?php include('nav.php'); ?>
        </div>

    <?php

    require('connect.php');

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['_id'])) {
                $id = $_GET['_id'];
                $query = "SELECT * FROM permits WHERE _id=$id";
                $result = mysqli_query($connect, $query);
                $permit = $result->fetch_assoc();

            echo '<h2 class="card-title">Permit Type: ' . $permit['permit_type'] . '</h2>
            <p class="card-text">Operating Name: ' . $permit['operating_name'] . '</p>
            <p class="card-text">Ward: ' . $permit['ward'] . '</p>
            <span class="badge bg-secondary">Client Name: ' . $permit['client_name'] . '</span>
            <br>------------------------------------'; 
            }



