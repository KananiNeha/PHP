<?php
  $math=90;
  $sci=50;
  $english=70;
  $ss=87;
  $total=$math+$sci+$english+$ss;
  $per=$total/4;
  echo "Total mark:".$total."<br>";
  echo "Per is:".$per. "<br>";

  if($per>=90 && $per<101)
  {
    echo"A+ Grade";
  }
  if($per>=80 && $per<90)
  {
    echo"A Grade";
  }
  if($per>=70 && $per<80)
  {
    echo" B+ Grade";
  }
  if($per>=60 && $per<70)
  {
    echo"B Grade";
  }
  if($per>=50 && $per<60)
  {
    echo"C Grade";
  }
  if($per>=45 && $per<50)
  {
    echo"D Grade";
  }






?>