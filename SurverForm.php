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
        <div class="form group">
            <label>Course *</label>
            <input type="radio" id="BSIT" name="course" value="BSIT" required aria-required="true">
            <label for="BSIT">BSIT</label>
            <input type="radio" id="BSCS" name="course">
        </div>
    </form>
</body>
</html>