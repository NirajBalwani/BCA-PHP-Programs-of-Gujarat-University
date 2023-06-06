
<!-- index array  array(1,2,3,4,5)
    associated array array(100 => "HTML", 10 => "CSS")
    multidimensional arrays -->


<?php
    echo "<b>forloop.....!!</b><br>";
    $sub=array("HTML","CSS","C#");
    $len=count($sub);
    echo $len . "<br>";

    for($i=0; $i < $len; $i++){
            echo $sub[$i] . " ";
    } 
    echo "<br><br>";
?>
<?php
         echo "<b>foreach loop.....!!<br></b>";
    
        $sub1=array(100=>"HTML",77=>"CSS",87=>"C#");

        foreach($sub1 as $x=>$val){
            echo $x. " = " .$val . "<br>";
        }
?>