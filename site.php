<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="site.php" method="post">
   color: <br><input type="text" name="color"><br>
   pluralNoun:  <br><input type="text" name="pluralNoun"><br>
   celebrity: <br><input type="text" name="celebrity"><br>
   <br><input type="submit">

   </form>
 <?php
 $color = $_POST["color"];
 $pluralNoun = $_POST["pluralNoun"];
 $celebrity = $_POST["celebrity"];

 echo "roses are $color";
 echo "$pluralNoun are blue";
 echo "I love $celebrity";
 ?>
</body>
</html>