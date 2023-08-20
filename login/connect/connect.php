<?php
/*
*Created by Moreish Cafe project developers(group members = Ravindu, Amalshi, Thilani, Jayanga, Rashmi, Pasindu)
*2022-01-11
*/

$servername = '127.0.0.1';
$username = "root";
$password = "rAvi628$";
$db = 'accident';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>