<?php
    
    $i=1;
    while($i<=5)
    {
        $j=1;
        $k=$i;
        while($k<=5)
        {
            echo "&nbsp;";
            $k++;
        }
        while($j<=$i)
        {
            echo " * ";
            $j++;
        }
        echo "<br>";
        $i++;
    }

?>