<?php
    $i=1;
    do
    {
        $j=1;
        $k=$i;
        do
        {
            echo "&nbsp;";
            $k++;
        }while($k<=5);
        do
        {
            echo " * ";
            $j++;
        }while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=5);
    $i=4;
    do
    {
        $j=1;
        $k=$i;
        do
        {
            echo "&nbsp;";
            $k++;
        }while($k<=5);
        do
        {
            echo " * ";
            $j++;
        }while($j<=$i);
        echo "<br>";
        $i--;
    }while($i>=1);
?>