<?php

$student = array(
    "name" => "Niraj",
    "email" => "niraj@gmail.com",
    "age" => 20,
    "gender" => "male",
    "majors" => "computer science",
    "gpa" => 9.5
);

echo "<b>Associative array: </b>" . "<br>";
echo "<b> Student Details </b> " . "<br><br>";
echo "Name: " . $student["name"] . "<br>";
echo "Email: " . $student["email"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Gender: " . $student["gender"] . "<br>";
echo "Majors: " . $student["majors"] . "<br>";
echo "GPA: " . $student["gpa"] . "<br>";

echo "<br> <br>";

foreach ($student as $i => $student) {

    echo $i . " : " . $student . "<br>";

}

?>