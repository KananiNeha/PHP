<?php
    $tanvi=65;
    $i=65;
    do
    {
        $j=65;
        $k=$i;
        do
        {
            echo "&nbsp;";
            $k++;
        }while($k<=69);
        do
        {
            echo " ".chr($tanvi++);
            $j++;
        }while($j<=$i);
        echo "<br>";
        $i++;
    }while($i<=69);

?>