<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Permits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    
    <h1 style="text-align: center;">Toronto Noise Exemption Permits</h1>

    <div>
        <?php include('nav.php'); ?>

    </div>

    <?php

        echo '<h1>Clients</h1>';

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
                <br></br>';

        }


    ?>

</body>

</html>