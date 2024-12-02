<?php
    $host = 'localhost';
    $un = 'root';
    $pw = '';
    $dbname = 'hotelmgt';

    $con = mysqli_connect($host, $un, $pw, $dbname) or die("Failed to connect with database");