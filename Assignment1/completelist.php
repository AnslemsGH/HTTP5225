<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Permits</title>
</head>
<body>
    
    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>

    </div>

    <?php

        echo '<h1>Client Name</h1>';

        require('connect.php');
            
        $query = 'SELECT * FROM permits';

        $permit = mysqli_query($connect,$query);

        foreach($permit as $permit) {

            $clientname = $permit['client_name'];

            echo  $clientname . '
                <form action="permit.php">
                    <input type="hidden" name="_id" value="' . $permit['_id'] . '">
                    <button type="submit" class="btn btn-sm btn-primary">View Permit</button>
                </form>
                
                <br>-----<br>';

        }


    ?>

</body>

</html>