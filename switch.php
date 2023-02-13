<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
        What is your Grade? <br><input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "You did Amazing Good!";
            break;
        case "B":
            echo "It is really Good";
            break;
        case "C":
            echo"Good";
            break;
        case "D":
            echo "Bad";
            break;
        default :
            echo "Invalid grade";
    }
    ?>
</body>
</html>