<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "Niraj";

    $con = mysqli_connect($host, $user, $password, $database) or die ("couldn't connect to databse");

    $que = "CREATE TABLE product (Pro_id int(3) primary key not null, Pro_name varchar(10), Pro_price int (5), QOH int (4))";

    $result = mysqli_query($con,$que);

    if ($result){
        echo "Table Created Successfully";
    }
    else {
        echo "Table already Exists";
    }

?>