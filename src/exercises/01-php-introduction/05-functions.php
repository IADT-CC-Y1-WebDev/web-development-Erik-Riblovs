<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>

<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/05-functions.php">View Example &rarr;</a>
    </div>

    <h1>Functions Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Temperature Converter</h2>
    <p>
        <strong>Task:</strong>
        Create a function called celsiusToFahrenheit() that takes a Celsius temperature as a parameter and returns the
        Fahrenheit equivalent. Formula: F = (C × 9/5) + 32. Test it with a few values.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function celsiusToFahrenheit($celsius)
        {
            return ($celsius * 9 / 5) + 32;
        }
        echo "<p>0°C = " . celsiusToFahrenheit(0) . "°F</p>";
        echo "<p>25°C = " . celsiusToFahrenheit(25) . "°F</p>";
        echo "<p>100°C = " . celsiusToFahrenheit(100) . "°F</p>";
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Rectangle Area</h2>
    <p>
        <strong>Task:</strong>
        Create a function called calculateRectangleArea() that takes width
        and height as parameters. It should return the area. If only one
        parameter is provided, assume it's a square (both dimensions equal).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function calculateRectangleArea($width, $height = null)
        {
            if ($height === null) {
                $height = $width;
            }
            return $width * $height;
        }
        echo "<p>Rectangle 7 × 12 = " . calculateRectangleArea(width: 7, height: 12) . "</p>";
        echo "<p>Square 9 × 9 = " . calculateRectangleArea(width: 9) . "</p>";
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Even or Odd</h2>
    <p>
        <strong>Task:</strong>
        Create a function called checkEvenOdd() that takes a number and returns
        "Even" if the number is even, or "Odd" if it's odd. Use the modulo
        operator (%).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function checkEvenOdd($number)
        {
            if ($number % 2 === 0) {
                return "Even";
            } else {
                return "Odd";
            }
        }
        echo "<p>4 " . checkEvenOdd(4) . "</p>";
        echo "<p>7 " . checkEvenOdd(7) . "</p>";
        echo "<p>0 " . checkEvenOdd(0) . "</p>";
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Array Statistics</h2>
    <p>
        <strong>Task:</strong>
        Create a function called getArrayStats() that takes an array of numbers
        and returns an array with three values: minimum, maximum, and average.
        Use array destructuring to display the results.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function getArrayStats($numbers) {
    $min = min($numbers);
    $max = max($numbers);
    $avg = array_sum($numbers) / count($numbers);
    return [$min, $max, $avg];
}
$values = [5, 12, 3, 19, 8];
[$minimum, $maximum, $average] = getArrayStats($values);
echo "<p>Minimum: $minimum</p>";
echo "<p>Maximum: $maximum</p>";
echo "<p>Average: $average</p>";
        ?>
    </div>

</body>

</html>