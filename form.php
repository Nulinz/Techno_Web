<?php

$con = mysqli_connect('localhost', 'nuscmy3y_saran', 'sara@7811853020', 'nuscmy3y_dlr_db');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //   exit();
}

if(isset($_POST['contact_form'])){
   
    extract($_POST);
    
    
    $ins_frm = "INSERT INTO `m_techno`( `name`, `email`, `contact`, `subject`, `message`) 
    
                              VALUES ('$name','$email','$contact','$subject','$message')";
            
    $q_frm = mysqli_query($con,$ins_frm);
    
    $q_frm ? header("Location:./index.php") : header("Location:./index.php");
    exit();
    
   
}


?>