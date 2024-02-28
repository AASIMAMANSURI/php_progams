<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h2{
        color : red;
        pading:12px;
        border:2px solid black;
       
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST["rows"] <=0 || $_POST["columns"] <=0 )
    {
        echo " <h2>enter more than 0  or one .</h2>";
    }
    else{
         $row = $_POST["rows"];
         $col = $_POST["columns"];
   

    
  
    echo "<table style='border: 2px solid red; '>";

    for ($i = 1; $i <= $row; $i++) {
        echo "<tr style='border:12px solid red; ' >";
        for ($j = 1; $j <= $col; $j++) {
            echo "<td style='border: 2px solid red; '>Cell $i-$j</td>";
        }
        echo "</tr>";
    }


    echo "</table>";
}
}
    ?>