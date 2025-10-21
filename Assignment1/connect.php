<?php

$connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'noise_exemption');

        if(!$connect){
            die('Connection failed:' .mysqli_connect_error());
        }