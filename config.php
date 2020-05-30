<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'drogueria';
    $conecting_database = mysqli_connect($host, $user, $password);
    mysqli_select_db($conecting_database, $database);
?>