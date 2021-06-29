<?php
require_once("db-connect.php");
$sql = 'SELECT * FROM articles';
$query = $conn -> prepare($sql);
$query ->execute();
$results = $query-> fetchAll(PDO::FETCH_ASSOC);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
    </head>
    <body>

    <?php foreach($results as $result){
?>
        <h1><?=$result['object']?></h1>
     
    <?php
    

}
    ?>
        
    <a href="form.php"><button>Articles</button></a>
    

    </body>
    </html>



