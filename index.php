<?php 

    class Movie{

        public $name;
        public $director;
        public $cast;
        public $genres;

        public function __construct($name, $director, $cast, $genres){
            
            $this->name = $name;
            $this->director = $director;
            $this->cast = $cast;
            $this->genres = $genres;
        }

        public function infoToString(){
            $string = "<strong>Film:</strong> $this->name <strong>Regista:</strong> $this->director <strong>Cast:</strong> ";
            
            foreach($this->cast as $actor){
                $string .= "$actor, ";
            }

            $string .= "<strong>Genere:</strong> ";

            if(is_array($this->genres)){
                foreach($this->genres as $genre){
                    $string .= "$genre, ";
                }
            }else{
                $string .= "$this->genres";
            }


            return $string;
        }
    }

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