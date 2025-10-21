<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noise Exemption Permits</title>
</head>
<body>

    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>
    </div>

    <div>
        <?php

        require('connect.php');
        
        $query = 'SELECT * FROM permits';

        $permit = mysqli_query($connect,$query);

        foreach($permit as $permit) {

            echo '<h3 class="card-title">' . $permit['licence_number'] . '</h3>
            <h4 class="card-title">Permit Type: ' . $permit['permit_type'] . '</h4>
            <p class="card-text">Operating Name: ' . $permit['operating_name'] . '</p>
            <p class="card-text">Ward: ' . $permit['ward'] . '</p>
            <span class="badge bg-secondary">Client Name: ' . $permit['client_name'] . '</span>';
        }

        ?>
    </div>

    
</body>
</html>