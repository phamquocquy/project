<?php
    $hostname = "localhost";
    $username ="root";
    $password ="";
    $database = "quanlynhansu1_db";
    $link = mysqli_connect($hostname,$username,$password,$database);
    mysqli_set_charset($link,"UTF8");