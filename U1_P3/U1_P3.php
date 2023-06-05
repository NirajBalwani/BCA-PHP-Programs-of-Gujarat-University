<?php
#switch statement
$d = date("D");
echo $d . "<br>";

switch ($d) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thurseday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    default:
        echo "Wonder which day it is";
        break;
}

?>

<?php
#If.....else
echo "<br>";
$d = date("D");
echo $d . "<br>";
if ($d == "Tue") {
    echo "Have a nice day" . "<br>";
} else {
    echo "Have a great day" . "<br>";
}
echo "<br>";
echo $e = date("M") . "<br>";
echo $e = date("d") . "<br>";
echo $r = date("Y") . "<br>";
echo $t = date("d/m/y") . "<br>";
?>
