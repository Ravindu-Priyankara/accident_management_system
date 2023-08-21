<?php
    include "connect/connect.php";

    $reg = $_POST['reg'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];

    echo "Email: " . $email;
    echo "Detail: " . $detail;
    echo "Reg: " . $reg;
   
        $rand_id = rand(100,1000);
        $sql = "INSERT INTO accident (reg, id, email, detail) VALUES ('$reg', $rand_id,'$email','$detail')";

        if (mysqli_query($conn, $sql))  
        {
            header('Location: ../index.html');
            exit;    
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
        mysqli_close($conn);

?>