<!DOCTYPE html>

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reviews</title>
    <link rel="stylesheet" href="movie.css">
</head>
<body>

<?php
   
    echo "<header>";
    echo "<h1>Movie Reviews</h1>";
    // Add navigation links or other header content
    echo "</header>";

    // Include container
    echo "<div class='container'>";

   
    $movies = [
        "The After" => ["year" => 2023, "rating" => 8.0],
        "Nowhere" => ["year" => 2023, "rating" => 7.0],
        "Anyone but You" => ["year" => 2023, "rating" => 8.0],
        "Locked In" => ["year" => 2023, "rating" => 6.0],
        "Fair Play" => ["year" => 2023, "rating" => 8.0],
    ];

 
    foreach ($movies as $title => $details) {
        // Include movie details
        echo "<section class='movie-details'>";
        echo "<h2>$title</h2>";

        echo "<p>Title: $title</p>";
        echo "<p>Release Year: {$details['year']}</p>";
        echo "<p>Rating: {$details['rating']}</p>";

        echo "</section>";

      
        echo "<section class='reviews'>";
        echo "<h2>Reviews</h2>";



        echo "</section>";
    }

    
    echo "<footer>";
    echo "<p>&copy; " . date("Y") . " Movie Review Website</p>";
    // Add other footer content
    echo "</footer>";

    echo "</div>"; // Close container
?>

</body>
</html>
