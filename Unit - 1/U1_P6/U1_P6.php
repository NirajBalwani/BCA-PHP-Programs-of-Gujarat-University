<?php

// Define a 2-dimensional array of student data
$students = array(
    array("Niraj", 20, "Male"),
    array("Asha", 22, "Female"),
    array("Rahul", 19, "Male")
  );
  
  // Loop through the rows of the array and output the data
  for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i][0] . "<br>";
    echo "Age: " . $students[$i][1] . "<br>";
    echo "Gender: " . $students[$i][2] . "<br><br>";
  }
  
  $keys = array_keys($students);

  for ($i = 0; $i < count($students); $i++) {
    foreach ($students[$keys[$i]] as $key => $value) {
        echo $key ." : " . $value . "<br>";
  }
}

?>