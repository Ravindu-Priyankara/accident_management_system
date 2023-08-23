<?php
    session_start();
    include "connect/connect.php";

    $username = $_POST["username"]; 
    $password = $_POST["password"]; 



    $sql1 = mysqli_query($conn,"SELECT * FROM porda WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($sql1);
    
    if($result > 0 )
    { 
        header('Location: ../dashboard/index.html');
        exit;    
    }
    else
    {
        echo 'The username or password are incorrect!';
    }
?> 