<?php 
    session_start();
    //host
    $host = "localhost";

    //dbname
    $dbname = "lifelineshield";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;user=$user;pass=$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>