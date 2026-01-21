<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/03-arrays.php">View Example &rarr;</a>
    </div>

    <h1>Arrays Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Favorite Movies</h2>
    <p>
        <strong>Task:</strong> 
        Create an indexed array with 5 of your favorite movies. Use a for 
        loop to display each movie with its position (e.g., "Movie 1: 
        The Matrix").
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $Movie = [
            'Pirates of the Carribean', 'Fast and Furious', 'Demon Hunters', 'Top Gun Maverick', 'The Amazing Spider-Man'
        ];
for ($i = 0; $i < count($Movie); $i++) {
    echo "Movie $i: $Movie[$i]<br>";
}
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Student Record</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array for a student with keys: name, studentId, 
        course, and grade. Display this information in a formatted sentence.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $keys = [
    "Name" => "Erik",
    "studentId" => "N00254119",
    "Course" => "DL836",
    "Grade" => "1st"
];
$text = 
    "{$keys['Name']}<br> {$keys['studentId']}<br>" .
    " {$keys['Course']}<br> {$keys['Grade']} Grade";

print("<p>$text</p>");
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Country Capitals</h2>
    <p>
        <strong>Task:</strong> 
        Create an associative array with at least 5 countries as keys and their 
        capitals as values. Use foreach to display each country and capital 
        in the format "The capital of [country] is [capital]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $countries = [
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Brazil" => "Brasília",
    "Canada" => "Ottawa",
    "Egypt" => "Cairo"
];

foreach ($countries as $country => $capital) {
    print("<p>The capital of $country is $capital.</p>");
}

        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Menu Categories</h2>
    <p>
        <strong>Task:</strong> 
        Create a nested array representing a restaurant menu with at least 
        2 categories (e.g., "Starters", "Main Course"). Each category should 
        have at least 3 items with prices. Display the menu in an organized 
        format.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
$menu = [
    "Starters" => [
        "Bruschetta" => 6.50,
        "Garlic Bread" => 5.00,
        "Caesar Salad" => 7.25
    ],
    "Main Course" => [
        "Grilled Salmon" => 18.99,
        "Chicken Alfredo" => 15.75,
        "Beef Burger" => 13.50
    ]
];

echo "<h2>Restaurant Menu</h2>";

foreach ($menu as $category => $items) {
    echo "<h3>$category</h3>";
    foreach ($items as $item => $price) {
        echo "<p>$item - $$price</p>";
    }
}

        ?>
    </div>

</body>
</html>
