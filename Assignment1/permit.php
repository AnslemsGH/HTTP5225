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
            $query = "SELECT * FROM permits p JOIN wards w ON p.ward = w.ward_id WHERE p._id = $id";
            $result = mysqli_query($connect, $query);
            $permit = $result->fetch_assoc();

            echo '<div>
            <strong class="card-title"> Client Name: ' . $permit['client_name'] . '</strong>
            <p>Licence Number: ' . $permit['licence_number'] . '</p>
            <p >Operating Name: ' . $permit['operating_name'] . '</p>
            <p>Address: ' . $permit['address'] . '</p>
            <p>Location name: ' . $permit['location_name'] . '</p>
            <p>Issue Date: ' . $permit['issue_date'] . '</p>
            <p>End Date(expected): ' . $permit['expected_end_date'] . '</p>
            <p>End Date(actual): ' . $permit['actual_end_date'] . '</p>
            <p>Ward: ' . $permit['ward'] . ', ' . $permit['ward_name'] . '</p>
            <span>Permit Type: ' . $permit['permit_type'] . '</span>
            <br>------------------------------------
            </div>'; 
        }

    ?>

</body>

</html>




