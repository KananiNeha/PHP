<?php
        $tanvi=65;
    for($i=65;$i<=69;$i++)
    {
        for($k=$i;$k<=69;$k++)
        {
            echo " &nbsp;";
        }
            for($j=65;$j<=$i;$j++)
        {
            echo " ".chr($tanvi++);
        }
        echo "<br>";
    }

?>