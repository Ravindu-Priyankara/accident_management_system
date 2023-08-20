<?php
    include "connect/connect.php";

    $reg = $_POST['reg'];
    $vno = $_POST['vno'];
    $pswd = $_POST['pswd'];


    if($pswd == $pswd)
    {
        $rand_id = rand(100,1000);
        $sql = "INSERT INTO driver (reg, id, vno, pswd) VALUES ('$reg', $rand_id,'$vno','$pswd')";

        if (mysqli_query($conn, $sql))  
        {
            header('Location: ../login.html');
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