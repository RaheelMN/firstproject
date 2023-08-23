<?php

echo "<br> hello this is rough";
$var = null;
$result = isset($var)? "<br> value of var is $var" :  "var is null";
echo "<br> $result";
$arr = ['raheel','mansoor','khan'];
if(isset($arr[4])){
    $ans = $arr[4];
    echo "<br> ans : ".var_dump($ans);
}
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
<script>
    debugger;
    
    var vname = 'v raheel';
    let lname = 'l raheel';
    const cname = 'c raheel';
    let output = `<li>${vname}</li>`;
    output += `<li>${lname}</li>`;
    output += `<li>${cname}</li>`;
    document.body.innerHTML+=output;
</script>
<script>
    debugger;

</script>
</html>