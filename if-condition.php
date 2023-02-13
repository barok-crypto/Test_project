<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ismale= false;
    $istall=true;
    if ($ismale && $istall){
        echo "you are a tall male";
    } elseif($ismale && !$istall) {
        echo "you are a short male";
    } elseif(!$ismale && $istall){
        echo "you are a tall female";
    } else {
        echo "you are a short female";
    }
    ?>
</body>
</html>