<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check_box.php" method="post">
       Red: <input type="checkbox" name="color[]" value="red">
       Green: <input type="checkbox" name="color[]" value="green">
       Blue: <input type="checkbox" name="color[]" value="blue">
       <input type="submit">
    </form>
    <?php
    $color= $_POST["color"];
    echo $color[1];
    ?>
</body>
</html>