<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SurveyForm</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        form{
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Surver Form</h1>
    <p>Please fill out and complete the survey form. Thank you!</p>
    <form action="process_survery.php" method="POST">
        <div class="form_group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required aria-required="true">
        </div>

        <div class="form_group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required aria-required="true">
        </div>

        <div class="form_group">
            <label>Course *</label>
            <input type="radio" id="BSIT" name="course" value="BSIT" required aria-required="true">
            <label for="BSIT">BSIT</label>
            <input type="radio" id="BSCS" name="course" value="BSCS" required aria-required="true">
            <label for="BSCS">BSCS</label>
            <input type="radio" id="BSMMA" name="course" value="BSMMA" required aria-required="true">
            <label for="BSMMA">BSMMA</label>
            <input type="radio" id="BSDA" name="course" value="BSDA" required aria-required="true">
            <label for="BSDA">BSDA</label>
        </div>

        <div class="form_group">
            <label for="year">Year Level *</label>
            <select id="year" name="year" required aria-required="true">
                <option value="">--Select--</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
            </select>
        </div>

        <div class="form_group">
            <label>Programming Languages (Choose where your are most proficient with)</label>
            <input type="checkbox" id="py" name="proglang[]" value="Python">
            <label for="py">Python</label>
            <input type="checkbox" id="java" name="proglang[]" value="Java">
            <label for="java">Java</label>
            <input type="checkbox" id="c++" name="proglang[]" value="C++">
            <label for="c++">C++</label>
        </div>

        <div class="form_group">
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" rows="5"></textarea>
        </div>

        <div class="form_group">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    if (empty($_POST["email"])){
        $errors['email'] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    if (!empty($_POST["year"])) {
        $errors['year'] = "Please select your year level"; 
    } else {
        $year = htmlspecialchars($_POST["age"]);
    }

    if (!empty($_POST["proglang"])) {
        $proglang = $_POST["proglang"];
    } else {
        $proglang = [];
    }

    $comments = !empty($_POST["comments"]) ? htmlspecialchars(trim($_POST["comments"])) : "";

    if (empty($errors)) {
        echo "Thank you for filling up and submitting the survey form, $name!";
    } else {
        foreach ($errors as $field => $errro) {
            echo "<p class='error'>$error</p>";
        }
    }
}
?>
