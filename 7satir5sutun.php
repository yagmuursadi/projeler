<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    
    echo "<table border='1' width='100%'>";
      for ($satir=1;$satir<8;$satir++)
      {
        echo "<tr height='50px'>";

             for ($sutun=1;$sutun<6;$sutun++)
             {
                echo "<td> * </td>";
             }
        echo "</tr>";
      }
      echo "</table>";

      ?>
</body>
</html>