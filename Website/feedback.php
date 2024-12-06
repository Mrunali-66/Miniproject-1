<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email= $_POST['email'];
        $rating = $_POST['rating'];
        $suggestion = $_POST['suggestion'];

        
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'feedback';
        $conn = mysqli_connect($host,$user,$pass,$dbname);

        
        $sql = "INSERT INTO test (username,email,rating,suggestion) VALUES ('$username','$email','$rating','$suggestion')";
        $result = mysqli_query($conn,$sql);
        
        if($result)
        {
            echo "Feedback have been Submitted Successfully.....";
        }
        else
        {
            die(mysqli_error($con));
        }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Feedback.css">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h1>Feedback Form</h1>
            <p>We value your feedback. Please help us improve our services.</p>
        </div>
        
        <form action="#" method="post" onsubmit="return data()">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="username" required placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Rating</label>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" required>
                    <label for="star5">5</label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4">4</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">3</label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2">2</label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1">1</label>
                </div>
            </div>

            <div class="form-group">
                <label for="feedback">Your Feedback</label>
                <textarea id="feedback" name="suggestion" required placeholder="Please share your thoughts..."></textarea>
            </div>

            <input type="submit" name="submit" value="Submit Feedback"/>
        </form>
    </div>
</body>
</html>