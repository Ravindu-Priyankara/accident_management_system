<?php
    include "connect/connect.php";

    $whois = $_POST['whois'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pswd = $_POST['pswd'];


    if($pswd == $pswd)
    {
        $rand_id = rand(100,1000);
        $sql = "INSERT INTO Users ( id, email, whois, username, password) VALUES ($rand_id,'$email','$whois','$username','$password')";

        if (mysqli_query($conn, $sql))  
        {
            header('Location: ../driver/index.html');
            exit;    
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
        mysqli_close($conn);
    }
    else
    {
        echo "<script>alert('Password and retype password are not same one.')</script>";
        //please setup page
    }

?>