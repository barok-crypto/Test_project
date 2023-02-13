<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="asso-array.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
    $grade=array("biruk"=>"A+", "abebe"=>"B-", "kebede"=>"C+");
    echo $grade[$_POST["student"]];
    ?>
</body>
</html>