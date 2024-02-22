<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<?php 
    
    $name_err = $email_err = $grnder_err = "";
    $name = $email = $gender = "";

    
    ?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

NAME : <input type="text" name="name" value="<?php echo $name;?>">
<span class ="error"> *<?php  echo $name_err;?></span>
<br>
<br>
EMAIL : <input type="email" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $email_err;?> </span>

GENDER:<br><input type="radio" name="gender"
 <?php 
    if(isset($gender)&& $gender == "female")
    echo "checked;"
?>  value = "female">female
<input type="radio" name"gender" <?php 
if(isset($gender)&& $gender == "male")
echo checked;
?> value ="male">male
<br>
<br>
<input type= "submit" name="submit" value="submit">
</form>
   
</body>
</html>