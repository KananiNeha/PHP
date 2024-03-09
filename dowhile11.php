<?php
    $i=1;
    do
    {
        $j=1;
        do   
        {
            echo " ".$j;
            $j++;
        }  while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=5);
    $i=4;
    do
    {
        $j=1;
        do
        {
            echo " ".$j;
            $j++;
        }        while($j<=$i);
        echo "<br>";
        $i--;
    }while($i>=1);

?>