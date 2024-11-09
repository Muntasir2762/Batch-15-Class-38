<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro Class</title>
</head>
<body>
    <h1>This is our first class on php</h1>

    <?php
        echo "This is php in html block". "<br>";
    ?>
</body>
</html>

<?php
echo "Hello world!"."<br>";

$x = 10;
$y = 30;

$result = $x+$y;


echo "<h1>The result is=".$result."</h1>";

for($i=1; $i<=5; $i++){
    echo "Hello World!". "<br>";
}

$phpArray = [40, 50, 76, 30];

// echo $phpArray[0];
// echo $phpArray[1];
// echo $phpArray[2];
// echo $phpArray[3];

for($i=0; $i<=3; $i++){
    echo $phpArray[$i]. "<br>";
}


?>