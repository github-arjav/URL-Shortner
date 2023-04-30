<?php
    $conn = mysqli_connect("localhost", "root", "", "urlshortener");
    if(!$conn){
        echo "database connection error".mysqli_connect_error();
    }

?>