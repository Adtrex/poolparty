<?php
//session_start();

//setting variables for offline and online respectively
if (!checkdnsrr($_SERVER['SERVER_NAME'], 'NS')){
    //echo "Website is OFFLINE";
    $conn = mysqli_connect("192.185.21.169","orangeca_user","Orange_123@Card","orangeca_event");
}else{
    //echo "ONLINE ONLINE ONLINE";
    $conn = mysqli_connect("192.185.21.169","orangeca_user","Orange_123@Card","orangeca_event");
}


// Check connection
if (mysqli_connect_errno()){
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}//else{
//echo "COnnected Succefully";
//exit();
//} 
  
  
  
  
?>