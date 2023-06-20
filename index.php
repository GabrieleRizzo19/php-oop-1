<?php 

    class Movie{

        public $name;
        public $director;
        public $cast;

        public function __construct($name, $director, $cast){
            
            $this->name = $name;
            $this->director = $director;
            $this->cast = $cast;
        }

        public function infoToString(){
            $string = "<strong>Film:</strong> $this->name <strong>Regista:</strong> $this->director <strong>Cast:</strong> ";
            foreach($this->cast as $actor){
                $string .= "$actor ";
            }
            return $string;
        }
    }

    $avengers = new Movie('The Avengers','Joss Whedon',['Robert Downey JR', 'Chris Evand']);
    $spiderMan = new Movie('Spider-Man: Homecoming', 'Jon Watts', ['Tom Holland', 'Zendaya', 'Michael Keaton'])



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