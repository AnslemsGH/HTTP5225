<?php

$connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'schools_gary');

        if(!$connect){
            die('Connection failed:' .mysqli_connect_error());
        }
