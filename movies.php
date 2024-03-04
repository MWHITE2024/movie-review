{\rtf1\ansi\ansicpg1252\cocoartf2758
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <!DOCTYPE html>\
<html lang="en">\
<head>\
    <meta charset="UTF-8">\
    <meta http-equiv="X-UA-Compatible" content="IE=edge">\
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="movie.css">\
    <title>Movie Review</title>\
</head>\
<body>\
\
<?php\
// Get the movie parameter from the URL\
$movie = $_REQUEST["film"];\
\
// Define the path to the movie directory\
$movieDirectory = "./$movie/";\
\
// Read general information from info.txt\
$infoFile = $movieDirectory . "info.txt";\
$lines = file($infoFile, FILE_IGNORE_NEW_LINES);\
list($title, $year, $overallRating, $numReviews) = $lines;\
\
// Display general information\
echo "<h1>$title ($year)</h1>";\
echo "<p>Overall Rating: $overallRating%</p>";\
echo "<p>Number of Reviews: $numReviews</p>";\
\
// Read and display the general overview from overview.txt\
$overviewFile = $movieDirectory . "overview.txt";\
$overviewLines = file($overviewFile, FILE_IGNORE_NEW_LINES);\
echo "<h2>General Overview</h2>";\
echo "<ul>";\
foreach ($overviewLines as $line) \{\
    list($key, $value) = explode(":", $line, 2);\
    echo "<li><strong>$key:</strong> $value</li>";\
\}\
echo "</ul>";\
\
// Display any additional content or reviews as needed\
?>\
\
</body>\
</html>\
}