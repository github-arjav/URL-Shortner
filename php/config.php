<?php
    $conn = mysqli_connect("localhost", "root", "", "urlshortner");
    if(!$conn){
        echo "database connection error".mysqli_connect_error();
    }

?>