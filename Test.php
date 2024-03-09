<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <table border="1" cellspacing="0">
        <form action="" method="POST">
        <tr><td><h1>Result Form</h1></td> </tr>
        <tr><td> Roll No: <input type="text" name="rnum"></td></tr>
        <tr><td><h2>Subject Marks:</h2></td></tr>
        <tr><td> Maths:<input type="text" name="math"></td></tr>
        <tr><td>Science:<input type="text" name="sci"></td></tr>
        <tr><td> English:<input type="text" name="eng"></td></tr>
        <tr><td>Hindi:<input type="text" name="hin"></td> </tr>
        <tr><td> <input type="submit" name="calculate"></td></tr>
        </form>
    </table>
    </body>
</html>

<?php
if(isset($_POST['calculate']))
{
   $a=$_POST['math'];
   $b=$_POST['sci'];
   $c=$_POST['eng'];
   $d=$_POST['hin'];
   $total=$a+$b+$c+$d;
   $per=$total/4;
   echo "Total Mark:".$total."<br>";
   echo "Per is:".$per."<br>";
     
   if($per>=90 && $per<101)
   {
      echo "A+ Grade";
   }
   if($per>=80 && $per<90)
   {
      echo "A Grade";
   }
   if($per>=70 && $per<80)
   {
      echo "B Grade";
   }
   if($per>=60 && $per<70)
   {
      echo "C Grade";
   }
   if($per>50 && $per<60)
   {
      echo "D Grade";
   }
   
}
?>