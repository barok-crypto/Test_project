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
    class Book{
        var $title;
        var $author;
        var $pages;
        
        function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author= $aAuthor;
            $this->pages= $aPages;
        }
        
        function isbig(){
            if($this->pages >= 300){
                return "<br>true";
            }
            return "<br>false";
        }
    }


    $book1 = new Book("Emegua", "Alemayehu Wase", 195);
    
    echo $book1->title;
    echo $book1->isbig();
    ?>
</body>
</html>