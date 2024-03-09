<?php
    $tanvi=65;
    $i=65;
    while($i<=69)
    {
        $j=65;
        $k=$i;
        while($k<=69)
        {
            echo "&nbsp;";
            $k++;
        }
        while($j<=$i)
        {
            echo " ".chr($tanvi++);
            $j++;
        }
        echo "<br>";
        $i++;
    }

?>