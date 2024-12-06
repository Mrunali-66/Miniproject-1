<?php
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['user_name'];
        $email= $_POST['email'];
        $rating = $_POST['rating'];
        $suggestion = $_POST['suggestion'];

        
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'feedback';
        $conn = mysqli_connect($host,$user,$pass,$dbname);

        
             $sql = "INSERT INTO test(user_name,email,rating,suggestion) values ('$user_name',$email','$rating','$suggestion')";
             $result = mysqli_query($conn,$sql);
        
             if($result)
            {
                echo "Data have been Submitted Successfully.....";
            }
              else
            {
               die(mysqli_error($con));
            }
        
        

    }
?>
