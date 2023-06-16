<?php
        function strconcat($val1,$val2){
            $concat = $val1 . $val2;
            echo "concatination with parameters:" , $concat;
            echo "<br><br>";
        }

        strconcat('welcome','TYBCA Students'.'<br>');
        strconcat('welcome','SYBCA Students'.'<br>');
        strconcat('welcome','FYBCA Students'.'<br>');
        echo "<br>";

?>
<?php

        function strconcat1(){
            $concat ='welcome';
            $concat1 ='TYBCA Students';
            echo "Concatination without parameters:" . $concat . $concat1;
        }

        strconcat1();
        echo "<br><br>";
?>
<?php
        function calculate($a,$b){
            $ans = $a * $b;
            return $ans;
            echo "<br><br>";

        }

        echo calculate(25,25) . "<br>";
        echo calculate(34,20) . "<br>";
        echo calculate(25,32) . "<br>";
        echo "<br>";
?>