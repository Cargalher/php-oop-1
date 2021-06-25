<?php 
class Movies
{
        public $title;           //<----- atribute
        public $director;           //<----- atribute
        public $plot;          //<----- atribute
        public $release;        //<----- atribute
    
        /**
         * Movies Constructor
         *
         * @param string $title
         * @param string $director
         * @param string $plot
         * @param float $release
         */
        public function __construct(string $title, string $director, string $plot, float $release)
        {
           $this -> title = $title;
           $this -> director = $director;
           $this -> plot = $plot;
           $this -> release = $release;
           
        }
}
