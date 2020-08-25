<?php

    $connect = mysqli_connect('localhost', 'root', '', 'regaut');

    if (!$connect) {
        die('Error connect to DataBase');
    }