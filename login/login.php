<?php
    session_start();
    include "connect/connect.php";

    $reg = $_POST["reg"]; 
    $password = $_POST["pswd"]; 

    $_SESSION['reg'] = $reg;


    $sql1 = mysqli_query($conn,"SELECT * FROM driver WHERE reg = '$reg' AND pswd = '$password'");
    $result = mysqli_num_rows($sql1);
    
    if($result > 0 )
    { 
        header('Location: ../driver/index.html');
        exit;    
    }
    else
    {
        echo 'The username or password are incorrect!';
    }
?> 