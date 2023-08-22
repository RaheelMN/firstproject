<?php

echo "<br> hello this is rough";
$var = null;
$result = isset($var)? "<br> value of var is $var" :  "var is null";
echo "<br> $result";
$arr = ['raheel','mansoor','khan'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($arr as $key){
                echo "<li>name is $key </li>";
            }
        ?>
    </ul>
</body>
</html>