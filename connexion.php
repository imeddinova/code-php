<?php
// Create connection
$connexion = mysqli_connect("localhost","root", "", "clinique");

// Check connection
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
    echo "error";
}

?>