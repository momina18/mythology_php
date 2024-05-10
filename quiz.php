<?php include ('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Boxes</title>
    <style>
        .quiz-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .quiz-box {
            width: 200px;
            height: 200px;
            border: 1px solid #ccc;
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="quiz-container">
    <div class="quiz-box">
        <a href="mahabharat_quiz.php">Mahabharat Quiz</a>
    </div>

    <div class="quiz-box">
        <a href="ramayan_quiz.php">Ramayan Quiz</a>
    </div>

    <div class="quiz-box">
        <a href="bhagavad_gita_quiz.php">Bhagavad Gita Quiz</a>
    </div>
    <div class="quiz-box">
        <a href="krishna_quiz.php">krishna Quiz</a>
    </div>
</div>

</body>
</html>
