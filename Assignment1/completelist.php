    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>

    </div>
<?php

    require('connect.php');
        
    $query = 'SELECT * FROM permits';

    $permit = mysqli_query($connect,$query);

    foreach($permit as $permit) {

        $clientname = $permit['client_name'];


        echo '<a href="permit.php" 
                style="text-decoration: none; font-size: 1.1rem; font-weight: 500; transition: color 0.3s ease;">'
                . $clientname . '
            </a><br>-----<br>';

    }


?>