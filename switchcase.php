<html>
    <head>
        <title>Test 2</title>
    </head>
    <body>
        <table border="1" cellspacing="0">
        <form action="" method="POST">
          <tr><td>  Enter No: <input type="text" name="ennum" ></td></tr>
         <tr><td><input type="submit" name="tanvi"></td></tr>
        </form>
        </table>
    </body>
</html> 
 <?php
    if(isset($_POST['tanvi']))
    {
        $tanvi=$_POST['ennum'];
    }
            switch($tanvi)
            {
                case 1:
                    echo "Monday";
                    break;
                case 2:
                    echo "Tuesday";
                    break;
                case 3:
                    echo "Wednesday";
                    break;
                case 4:
                    echo "Thursday";
                    break;
                case 5:
                    echo "Friday";
                    break;
                case 6:
                    echo "Saurday";
                    break;
                case 7:
                    echo "sunday";
                    break;
                default:
                    echo "invalid";
            }
 ?>