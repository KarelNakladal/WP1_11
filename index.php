<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

define('MAX', 50);
define('MIN', 1);

$img = rand(MAX, MIN);

for ($i=0; $i <= $img; $i+= 1) { ?>
   <img src="https://target.scene7.com/is/image/Target/GUEST_d248a0cd-4627-4217-9f25-84752615653a?wid=488&hei=488&fmt=pjpeg" alt="mimon" width=90> <?php
}

?>

</body>
</html>