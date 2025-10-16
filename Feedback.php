<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <style>
        body {
            background: url('V1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .feedback-box {
            background: rgba(0, 0, 0, 0.6); /* पारदर्शक काळा box */
            width: 60%;
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.5);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-shadow: 2px 2px 5px #000;
        }

        .feedback-options {
            margin: 20px auto;
        }

        .feedback-options button {
            font-size: 18px;
            padding: 12px 24px;
            margin: 8px;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.9);
            color: #000;
            transition: transform 0.2s, background 0.3s;
        }

        .feedback-options button:hover {
            transform: scale(1.1);
            background: #ffcc00;
        }

        textarea {
            width: 80%;
            height: 100px;
            padding: 10px;
            border-radius: 8px;
            border: none;
            resize: none;
            font-size: 16px;
            margin-top: 20px;
        }

        button.submit-btn {
            margin-top: 20px;
            font-size: 18px;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            background: #28a745;
            color: white;
            cursor: pointer;
        }

        button.submit-btn:hover {
            background: #218838;
        }
    </style>
    <script>
        function submitFeedback(rating) {
            // hidden input मध्ये emoji value भरून form submit होईल
            document.getElementById("ratingInput").value = rating;
            document.getElementById("feedbackForm").submit();
        }
    </script>
</head>
<body>
    <div class="feedback-box">
        <h2>Give Your Feedback</h2>

        <form id="feedbackForm" action="Feedback1.php" method="POST">
            <!-- selected rating store होईल -->
            <input type="hidden" name="rating" id="ratingInput">

            <div class="feedback-options">
                <button type="button" onclick="submitFeedback('Very Bad 😠')">😠 Very Bad</button>
                <button type="button" onclick="submitFeedback('Bad ☹')">☹ Bad</button>
                <button type="button" onclick="submitFeedback('Good 🙂')">🙂 Good</button>
                <button type="button" onclick="submitFeedback('Very Good 😊')">😊 Very Good</button>
                <button type="button" onclick="submitFeedback('Superb 🤩')">🤩 Superb</button>
                <button type="button" onclick="submitFeedback('Excellent 😍')">😍 Excellent</button>
            </div>

            <textarea name="comment" placeholder="Write your feedback (optional)"></textarea><br><br>
        </form>
    </div>
</body>
</html>
