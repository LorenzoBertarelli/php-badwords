<?php
    $name = $_GET["testo"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $name ?></h2>
    <h2><?php $name_replace = str_replace('sono', '***', $name); 
        echo $name_replace ?>
    </h2>
</body>
</html>