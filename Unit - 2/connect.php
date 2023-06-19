<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "Niraj";

    $con = mysqli_connect($host, $user, $password, $database) or die("Couldn't connect to database");

    if ($con){
        echo "Database connected";
    }
    else{
        echo "Database not connected";
    }
?>

<?php

    // $con = mysqli_connect("localhost","root","","niraj");

    // if ($con){
    //     echo "Database connected";
    // }
    // else
    // {
    //     echo "Database not connected";
    // }

?>
