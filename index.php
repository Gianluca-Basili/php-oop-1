<?php 

    class Genere{
        public $name;

        public function __construct($name){
            $this-> name = $name;

        }
    }
    
    class Movie {
        public $title;
        public $year;
        public $genere;
        public $length;
        public $rating;
        

        public function __construct($title, $year, Genere $genere, $length,){
            $this-> title = $title;
            $this-> year = $year;
            $this-> genere = $genere;
            $this-> length = $length;
           



        }

        public function getMovieDetails(){
            $string = "Movie:".$this->title.", Genere:".$this->genere->name.",year".$this -> year.",length:".$this -> length;

            if($this -> rating !=null){
                $string.= ",rating:".$this -> rating;
            }

            return $string;
        }
    }

    $v_per_vendetta = new Movie('V per vendetta', '2006', new Genere('azione'), 126);
    $v_per_vendetta-> rating = 8;

    $pulp_fiction = new Movie ('pulp fiction', '1994', new Genere('pulp'), 150 );

    echo $v_per_vendetta->getMovieDetails();
    echo "<br/>";
    echo $pulp_fiction->getMovieDetails();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>