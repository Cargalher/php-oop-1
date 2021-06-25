<?php 
require __DIR__.'/movies.php';

$movies =[
    new movie ('Seven', 'David Fincher', 'The film tells the story of David Mills (Pitt), a detective who partners with the retiring William Somerset (Freeman) to track down a serial killer who uses the seven deadly sins as a motif in his murders. The screenplay was influenced by the time Walker spent in New York City trying to make it as a writer.', 1995),
    new movie ('Avatar', 'James Cameron', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora.', 2009),
    new movie ('Gladiator', 'Ridley Scott', 'Crowe portrays Roman general Maximus Decimus Meridius, who is betrayed when Commodus, the ambitious son of Emperor Marcus Aurelius, murders his father and seizes the throne. Reduced to slavery, Maximus becomes a gladiator and rises through the ranks of the arena to avenge the murders of his family and his emperor.', 2000),
    new movie ('Taxi Driver', 'Martin Scorsese', 'Travis Bickle is a lonely, impotent and insomniac ex-marine, who spends his nights driving his taxi throughout the shadowy streets of mid-70s New York City. Travis is fed up with the society he finds himself surrounded by, wishing that a "real rain will come and wash all the scum off the streets." ', 1976),
    new movie ('Pulp Fiction', 'Quentin Tarantino','Pulp Fiction is a 1994 American neo-noir black comedy crime film written and directed by Quentin Tarantino, who conceived it with Roger Avary. Starring John Travolta, Samuel L. Jackson, Bruce Willis, Tim Roth, Ving Rhames, and Uma Thurman, it tells several stories of criminal Los Angeles. The title refers to the pulp magazines and hardboiled crime novels popular during the mid 20th century, known for their graphic violence and punchy dialogue' , 1994),
    new movie ('theShinning', 'Stanley Kubrick', 'The Shining is set in Colorado in the 1970s. It centres on the Torrance family: husband Jack, wife Wendy, and their five-year-old son, Danny. ... He is informed by the hotel manager that the previous caretaker, Delbert Grady, killed his entire family inside the hotel.', 1980),
    
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main id="movies">
        <?php foreach ($movies as $movie) : ?>
            <div class="movie">
                <h1><?= $movie -> title; ?></h1>
                <span><?= $movie-> director; ?></span>
                <p><?= $movie -> plot; ?></p>
                <span><?= $movie-> release; ?></span>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>