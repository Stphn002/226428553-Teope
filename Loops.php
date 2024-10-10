<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Activity</title>
</head>

<body>

    <h1>Activity #1: Number Counter</h1>
    <?php
    $count = 2;

    while ($count <= 20) {
        echo $count . " ";
        $count += 2;
    }
    ?>

    <h1>Activity #2: Password Validator</h1>
    <?php
    $correctPassword = "password123";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $inputPassword = $_POST['password'];

        if ($inputPassword === $correctPassword) {
            echo "Access Granted.";
        } else {
            echo "Incorrect password.";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form method="post" action="">
            <label>Please enter the password:</label>
            <input type="password" name="password">
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>

    <h1>Activity #3: Multiplication Table</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . (7 * $i) . "<br>";
    }
    ?>

    <h1>Activity #4 Loop Control</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        if ($i == 9) {
            break;
        }
        echo $i . " ";
    }
    ?>

    <h1>Activity #5: Sum of Numbers</h1>
    <?php
    $sum = 0;
    $num = 1;

    while ($num <= 100) {
        $num += $num;
        $num++;
    }
    echo "The sum of numbers from 1 to 100 is: " . $sum;
    ?>

    <h1>Activity #6: Array Iteration</h1>
    <?php
    $movie = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasyte"];

    $counter = 1;

    foreach ($movie as $key => $value) {
        echo "$key = $value<br>";
    }
    $counter++;
    ?>

    <h1>Activity #7: Key-Value Pairs</h1>
    <?php
    $studentInfo = [
        "Name" => "Stephen",
        "Age" => "22",
        "Grade" => "S",
        "City" => "Baguio"
    ];

    foreach ($studentInfo as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>

    <h1>Activity #8: Factorial Calculator</h1>
    <?php
    $num = 5;
    $fac = 1;

    for ($i = $num; $i >= 1; $i--) {
        $fac *= $i;
    }
    echo "Factorial of $num is: $fac";
    ?>

    <h1>Activity #9: FizzBuzz</h1>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz<br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz<br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz<br>";
        } else {
            echo $i . "<br> ";
        }
    }
    ?>

    <h1>Activity #10: Prime Number Checker</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numer'])) {
        $number = $_POST['number'];
        $is_prime = true;

        if ($number < 2) {
            $is_prime = false;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity #10 Prime Number Checker</title>
    </head>

    <body>
        <form method="post" action="">
            <label>Enter a number: </label>
            <input type="number" name="number">
            <input type="submit" value="Check">
        </form>
    </body>

    </html>

    <h1>Activity #11: Fibonacci Sequence</h1>
    <?php
    $first = 0;
    $second = 1;
    $count = 0;
    $limit = 10;

    while ($count < $limit) {
        echo $first . " ";

        $next = $first + $second;

        $first = $second;
        $second = $next;

        $count++;
    }
    ?>

    <h1>Activity #12: Reverse a String</h1>
    <?php
    $reversi = readline('input something: ');

    echo "output:" . strrev($reversi);
    ?>

</body>
</html>