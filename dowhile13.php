<?php
$i=5;
do
{
    $j=1;
    do
    {
        echo " * ";
        $j++;
    }while($j<=$i);
    echo "<br>";
    $i--;
}while($i>=1);
    $i=2;
    do
    {
        $j=1;
       do
        {
            echo " * ";
            $j++;
        } while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=5);

?>