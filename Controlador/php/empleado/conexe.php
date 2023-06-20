<?php
$servername = "localhost";
$username = "root";
$password = "";
$nomBD = "fruverlacami";



$conn = mysqli_connect($servername, $username, $password, $nomBD);

       if (!$conn) {
           die("conecxion fallida: " . mysqli_connect_error());
        }
//echo "conecxion exitosa";
?>