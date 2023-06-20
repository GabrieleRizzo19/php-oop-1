<?php 

    include 'Models/Movie.php';

    $avengers = new Movie('The Avengers','Joss Whedon',['Robert Downey JR', 'Chris Evand'],['Heroes', 'Action']);
    $spiderMan = new Movie('Spider-Man: Homecoming', 'Jon Watts', ['Tom Holland', 'Zendaya', 'Michael Keaton'], 'Heroes');

    var_dump($avengers);
    var_dump($spiderMan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    

    <p>
        <?php 
            echo $avengers->infoToString();
        ?>
    </p>
    <p>
        <?php 
            echo $spiderMan->infoToString();
        ?>
    </p>


</body>
</html>