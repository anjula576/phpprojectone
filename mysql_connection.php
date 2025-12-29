<?php

//  create connection between php file and mysql database
$conn = new mysqli(hostname: 'localhost', username: 'root', password: '', database: 'customer_crud');

//  check the connection 
if (!$conn) {


    die(mysqli_error($conn));

}
?>