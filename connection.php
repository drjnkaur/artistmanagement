<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "artist";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
        echo "Conencted";
    }else{
        echo "Not connected";
    }

?>