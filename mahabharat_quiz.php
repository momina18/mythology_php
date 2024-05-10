<?php include ('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            margin-top: 0;
        }
        /* Style for quiz questions */
        .question {
            margin-bottom: 20px;
        }
        .question p {
            font-weight: bold;
        }
        .question input[type="radio"] {
            margin-right: 10px;
        }
        /* Style for correct answers */
        #answers {
            display: none;
            margin-top: 20px;
        }
        /* Style for popup */
        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 2px solid #000;
            z-index: 9999;
        }
        #popup h3 {
            margin-top: 0;
        }
        #popup p {
            margin-bottom: 10px;
        }
        #popup button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #popup button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h3>Quiz</h3>

<div id="quiz">
    <!-- Question 1 -->
    <div class="question">
        <p>1. Who has the strength of 1000 elephants?</p>
        <input type="radio" name="question1" value="option1"> Ashwatthama<br>
        <input type="radio" name="question1" value="option2"> Bheema<br>
        <input type="radio" name="question1" value="option3"> Duryodhana<br>
        <input type="radio" name="question1" value="option4"> Arjuna<br>
      
       
    </div>

    <!-- Question 2 -->
    <div class="question">
        <p>2. Which is the holiest of all rivers?</p>
        <input type="radio" name="question2" value="option1"> Krishna<br>
        <input type="radio" name="question2" value="option2"> Yamuna<br>
        <input type="radio" name="question2" value="option3"> Ganga<br>
        
       
    </div>

    <div class="question">
        <p>3.Which of these is not Krishna's name?</p>
        <input type="radio" name="question2" value="option1"> Markandeya<br>
        <input type="radio" name="question2" value="option2"> Mukunda<br>
        <input type="radio" name="question2" value="option3"> Govindha<br>
        <input type="radio" name="question2" value="option3"> Madhusudhana<br>

        
       
    </div>

    <div class="question">
        <p>4. What is the name of Dronacharya's son?</p>
        <input type="radio" name="question2" value="option1"> Ambaalikaa<br>
        <input type="radio" name="question2" value="option2"> Arjuna<br>
        <input type="radio" name="question2" value="option3"> Aswattama<br>
        <input type="radio" name="question2" value="option3"> Karna<br>

        
       
    </div>

    <div class="question">
        <p>5.  In which vyuha was Abhimanyu trapped and killed?</p>
        <input type="radio" name="question2" value="option1"> Makara Vyuha<br>
        <input type="radio" name="question2" value="option2"> Chakra Vyuha<br>
        <input type="radio" name="question2" value="option3"> Garbha Vyuha<br>
        <input type="radio" name="question2" value="option3"> Vajra Vyuha<br>

        
       
    </div>

    <div class="question">
        <p>6.  Who is the mother of Ghatotkacha?</p>
        <input type="radio" name="question2" value="option1"> Ganga<br>
        <input type="radio" name="question2" value="option2"> Satyabhama<br>
        <input type="radio" name="question2" value="option3"> Draupadi<br>
        <input type="radio" name="question2" value="option3"> Hidimba<br>

        
       
    </div>
    <div class="question">
        <p>7.  Who is the author of Mahabharata?</p>
        <input type="radio" name="question2" value="option1"> Valmiki<br>
        <input type="radio" name="question2" value="option2"> Veda Vyasa<br>
        <input type="radio" name="question2" value="option3"> Agasthya<br>
        

        
       
    </div>
    <div class="question">
        <p>8.  Who was the charioteer of Dhridrashtra?</p>
        <input type="radio" name="question2" value="option1">Sanjaya<br>
        <input type="radio" name="question2" value="option2"> Nakula<br>
        <input type="radio" name="question2" value="option3">Vidura<br>
        <input type="radio" name="question2" value="option3">Drona<br>

         </div>

         <div class="question">
        <p>9.  Who used the NarayanAstra?</p>
        <input type="radio" name="question2" value="option1">Barbarika<br>
        <input type="radio" name="question2" value="option2"> Vikarna<br>
        <input type="radio" name="question2" value="option3">Yuyutsu<br>
        <input type="radio" name="question2" value="option3">Aswattama<br>

         </div>
         <div class="question">
        <p>10.  Name the Astra got by Arjuna from Lord Shiva</p>
        <input type="radio" name="question2" value="option1">Brahmastra<br>
        <input type="radio" name="question2" value="option2"> Narayanastra<br>
        <input type="radio" name="question2" value="option3">Pashupatastra<br>
        <input type="radio" name="question2" value="option3">Maheshwara Astra<br>

         </div>

    <!-- Repeat for other questions -->
    <!-- Question 3 to 10 -->

    <!-- Submit Button -->
    <button onclick="submitQuiz()">Submit</button>
    </div>

    <!-- Correct answers section -->
    <div id="answers">
        <h3>Correct Answers</h3>
        <p>1. Who has the strength of 1000 elephants? - Bheema</p>
        <p>2. Which is the holiest of all rivers? - Ganga</p>
        <p>3. Which of these is not Krishna's name? - Markandeya</p>
     <p>4. Which of these is not Krishna's name? - Markandeya</p>
        <p>5. In which vyuha was Abhimanyu trapped and killed? - Chakra Vyuha</p>
        <p>6. Who is the mother of Ghatotkacha? - Hidimba</p>
        <p>7. Who is the author of Mahabharata? - Veda Vyasa</p>
        <p>8. Who was the charioteer of Dhridrashtra? - Sanjaya</p>
        <p>9. Who used the NarayanAstra? - Aswattama</p>
        <p>10. Name the Astra got by Arjuna from Lord Shiva - Pashupatastra</p>


        <!-- Add other questions and correct answers here -->
    </div>

   <div id="popup">
            <h3>Quiz Results</h3>
            <p id="score"></p>
            <p id="message"></p>
            <button onclick="collectCertificate()">Collect Certificate</button>
        </div>
    </div>
    <script>
        function submitQuiz() {
            // Calculate score
            var score = calculateScore();
            // Show correct answers
            var answersDiv = document.getElementById('answers');
            answersDiv.style.display = 'block';
            // Show popup with score and message
            var popup = document.getElementById('popup');
            popup.style.display = 'block';
            // Display score in the popup
            var scoreDisplay = document.getElementById('score');
            scoreDisplay.innerHTML = 'Your score: ' + score + ' out of 10';
            // Display message based on score
            var message = document.getElementById('message');
            if (score >= 7) {
                message.innerHTML = 'Congratulations! You passed and received a certificate.';
            } else {
                message.innerHTML = 'Better luck next time!';
            }
        }
        function calculateScore() {
            // Logic to calculate the score based on selected answers
            var score = 0;
            // Implement your logic to calculate the score here
            return score;
        }
        function collectCertificate() {
            // Logic to collect the certificate
            // You can implement this based on your requirements
            alert('Certificate collected!');
        }
    </script>


</body>
</html>
