<?php

    $a1 = array("Python ", "C ", "Asp.Net ", "AI ",  "Cloud_Computing ");

    echo "Array before sorting : ";
    foreach ($a1 as $val) {
        echo $val;
    }
    echo "<br><br>";

    sort($a1);
    $n = count($a1);
    echo "Array Sorting in ascending order : ";

    for ($i = 0; $i < $n; $i++) {
        echo  $a1[$i] . "   ";
    }
    echo "<br><br>";

    echo "Array Sorting in Descending order : ";
    rsort($a1);
    for ($i = 0; $i < $n; $i++) {
        echo $a1[$i] . " ";
    }
    echo "<br><br>";
?>

<?php

    $a2 = array(2, 5, 8, 3, 45, 47, 99, 44, 11, 26);

    echo "Array Befor Sorting :- ";
    foreach ($a2 as $val) {
        echo "$val" . " ";
    }
    echo "<br><br>";

    echo "Array After Sorting in Ascending Order :- ";
    sort($a2);

    foreach ($a2 as $val) {
        echo $val . " ";
    }
    echo "<br><br>";

    echo "Array After Sorting in Descending Order :- ";
    rsort($a2);

    foreach ($a2 as $val) {
        echo $val . " ";
}

// arsort krsort se bi desending hota hai
?>