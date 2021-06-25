<?php 
class Movie
{
        public $title;           //<----- atribute
        public $director;           //<----- atribute
        public $plot;          //<----- atribute
        public $release;        //<----- atribute
}  
        /**
         * Movies Constructor
         *
         * @param string $title
         * @param string $director
         * @param string $plot
         * @param float $release
         */


        //  create class Instance (object)

        $seven = new Movie ();
        $avatar = new Movie ();
        $gladiator = new Movie ();
        $taxiDriver = new Movie ();
        $PulpFiction = new Movie ();
        $theShinning = new Movie ();

        // give a value to the attributes
        $seven -> title = "Seven";
        $seven -> director = "David Fincher";
        $seven -> plot = "The film tells the story of David Mills (Pitt), a detective who partners with the retiring William Somerset (Freeman) to track down a serial killer who uses the seven deadly sins as a motif in his murders. The screenplay was influenced by the time Walker spent in New York City trying to make it as a writer.";
        $seven -> release = "1995";

        $avatar -> title = "Avatar";
        $avatar -> director = "James Cameron";
        $avatar -> plot = "A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora.";
        $avatar -> release = "2009";

        $gladiator -> title = "Gladiator";
        $gladiator -> director = "Ridley Scott";
        $gladiator -> plot = "Crowe portrays Roman general Maximus Decimus Meridius, who is betrayed when Commodus, the ambitious son of Emperor Marcus Aurelius, murders his father and seizes the throne. Reduced to slavery, Maximus becomes a gladiator and rises through the ranks of the arena to avenge the murders of his family and his emperor.";
        $gladiator -> release = "2000";

        $taxiDriver -> title = "Taxi Driver";
        $taxiDriver -> director = "Martin Scorsese";
        $taxiDriver -> plot = "Travis Bickle is a lonely, impotent and insomniac ex-marine, who spends his nights driving his taxi throughout the shadowy streets of mid-70's New York City. Travis is fed up with the society he finds himself surrounded by, wishing that a 'real rain will come and wash all the scum off the streets.'";
        $taxiDriver -> release = "1976";

        $PulpFiction -> title = "Pulp Fiction";
        $PulpFiction -> director = "Quentin Tarantino";
        $PulpFiction -> plot = "Jules Winnfield (Samuel L. Jackson) and Vincent Vega (John Travolta) are two hit men who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace (Ving Rhames). Wallace has also asked Vincent to take his wife Mia (Uma Thurman) out a few days later when Wallace himself will be out of town.";
        $PulpFiction -> release = "1994";

        $theShinning -> title = "The Shinning";
        $theShinning -> director = "Stanley Kubrick";
        $theShinning -> plot = "The Shining is set in Colorado in the 1970s. It centres on the Torrance family: husband Jack, wife Wendy, and their five-year-old son, Danny. ... He is informed by the hotel manager that the previous caretaker, Delbert Grady, killed his entire family inside the hotel.";
        $theShinning -> release = "1980";

        var_dump($seven, $avatar, $gladiator,$taxiDriver, $PulpFiction, $theShinning);
        


//         public function __construct(string $title, string $director, string $plot, float $release)
//         {
//            $this -> title = $title;
//            $this -> director = $director;
//            $this -> plot = $plot;
//            $this -> release = $release;
           
//         }
// 
