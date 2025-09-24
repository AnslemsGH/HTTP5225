<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>
    <?php
    $connect = mysqli_connect('localhost','root','','csv_db 23');

    if(!$connect){
        die("Connection Failed".mysqli_connect_error());
    }

    $query = "SELECT * FROM colors";

    $colors = mysqli_query($connect, $query);
    
    // echo "<pre>";
    // print_r($colors);    
    // echo "</pre>";

    foreach($colors as $color){
        // echo $color['Name'].'<br>';
        echo "<div><h3 style='background: " . $color['Hex'] . "; text-align: center;'>".$color['Name']."</h3></div><br>";
    }

    ?>
</body>
</html>