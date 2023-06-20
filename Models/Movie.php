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

?>