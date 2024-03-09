<?php
    $i=0;
    do
    {
        $j=0;
        do
        {
            echo " ".$j%2;
            $j++;
        }while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=4);

?>