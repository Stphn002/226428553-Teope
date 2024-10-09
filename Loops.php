<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Activity</title>
</head>
<body>
    <?php //1
        $number = 1;
            while ($number <=10){
                echo $number . " ";
                $number++;
            }
    ?>
    <?php
        $number = 2;
            while ($number <=20){
                echo $number . " ";
                $number += 2;
            }
    ?>

    <?php //2
        $correctPassword = "passwordCIT17";
        $userInput = " ";

        do{
            echo "Please enter the password: ";
            $userInput = trim(fgets(STDIN));

            if($userInput !== $correctPassword){
                echo "Incorrect Password. \n";
            }
        }while ($userInput !== $correctPassword);
        echo "Correct Password\n"
    ?>

    <?php //3
        $table = 7;
        $length = 10;
        $i = 1;
        echo "Multiplication Table: $table \n";
        for($i=1; $i<=length; $i++)
            echo "$i * $table = ".$i * $table. "\n";
    ?>

    <?php //4
        for ($i = 1; $i <=10; $i++) {
            if ($i == 5){
                continue
            }
        if ($i == 9){
            break;
        }
        echo $i . "<br>";
        }
    ?>

    <?php //5
        $sum = 0;
        $i = 1;

        while($i <=100){
            $sum += $i;
            $i ++;
        }
        echo "The sum of numbers from 1 to 100 is: $sum";
    ?>

    <?php //6
        $favoriteMovies = ["1. The Intern", "2. Despicable Me", "3. One Piece: RED", "4. Your Name", "5. The End of Evangelion"];
        foreach ($favoriteMovies as $movie){
            echo "$movie<br>";
        }
    ?>

    <?php //7
        $studentInfo = [
            "Name" => "Stephen",
            "Age" => 22,
            "Grade" => "SSS",
            "City" => "Baguio"
        ];

        foreach ($studentInfo as $key => $value){
            echo "$key: $value<br>";
        }
    ?>

    <?php //8
        $number = 5;
        $factorial = 1;

        for ($i = $number; $i > 0; $i--){
            $factorial*=$i;
        }
        echo "Factorial of $number is $factorial";
    ?>

    <?php //9
        for ($i = 1; $i <= 50; $i++){
            if ($i % 3 == 0 && $i % 5 == 0){
                echo "FizzBuzz<br>";
            }
            elseif ($i % 3 == 0){
                echo "Fizz<br>";
            }
            elseif ($i % 5 == 0){
                echo "Buzz<br>";
            }
            else{
                echo $i . "<br>";
            }
        }
    ?>

    <?php //10
        $number  = isset($_GET['number']) ? intval($_GET['number']) : 17;
        function isPrime($num){
            if ($num <= 1){
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++){
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        if (isPrime($number)){
            echo $number . " is a prime number.";
        } else {
            echo $number . " is not a prime number.";
        }
    ?>

    <?php //11
        $num1 = 0;
        $num2 = 1;

        $counter = 0;

        $limit = 10;

        while ($counter < $limit) {
            echo $num1 . "<br>";

            $nextNum = $num1 + $num2;

            $num1 = $num2;
            $num2 = $nextNum;
            
            $counter++;
        }
    ?>

    <?php //12
    $reversi = readline("Input: ");
    echo "output: " .strrev ($reversi);
    ?>   


</body>
</html>