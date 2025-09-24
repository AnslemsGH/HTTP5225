<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <style>
        h1{
            text-align: center;
        }
        .box{
            background: black;
            color: white;
            max-width: 550px;
            border-radius: 5px;
            padding: 20px;
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <h1>Contacts</h1>
    <div class="container">

        <?php

        // Function to fetch user data from the JSONPlaceholder API
        function getUsers() {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
        }

        // Get the list of users
        $users = getUsers();

        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $name = $user['name'];
            $email = $user['email'];
            $address = $user['address']['street'] . ", " .$user['address']['suite'] . ", " .$user['address']['city'] . " - " .$user['address']['zipcode'];
            echo "
            <div class='box'>
                <div class='username'>$name</div>
                <a class='useremail' href='mailto:$email'>$email</a>
                <div class='address'>
                    <strong>Address:</strong><br>$address
                </div>
                <br>
            </div>
            ";
        }
        ?>
    </div>
</body>
</html>
