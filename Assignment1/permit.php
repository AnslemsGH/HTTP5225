    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>

    </div>

<?php


require('connect.php');

        
        $query = 'SELECT * FROM permits';

        $permit = mysqli_query($connect,$query);

echo '<h2 class="card-title">' . $permit['licence_number'] . '</h2>
            <h2 class="card-title">Permit Type: ' . $permit['permit_type'] . '</h2>
            <p class="card-text">Operating Name: ' . $permit['operating_name'] . '</p>
            <p class="card-text">Ward: ' . $permit['ward'] . '</p>
            <span class="badge bg-secondary">Client Name: ' . $permit['client_name'] . '</span>
            <br>------------------------------------';