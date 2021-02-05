<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php 
    $array = [];
    
    $array[0] = $_GET["name"];

    $count = count($array);

    for ($i = 0; $i < $count; $i++) {
          echo $array[$i];
     }
    ?>
    
</body>
</html>

