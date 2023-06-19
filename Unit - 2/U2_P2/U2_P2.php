 <?php

    $con = mysqli_connect("localhost", "root", "") or die ("Couldn't connect to Database");

    $sql = "CREATE DATABASE Nirj";

    $result = mysqli_query($con, $sql);

    if ($result){
        echo "Database created successfully";
    }
?> 

<?php

// // Database credentials
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "CREATE DATABASE `DB-1`";

// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

?>
