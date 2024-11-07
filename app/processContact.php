<?php
    
    require_once('../assets/dbconn.php');
    extract($_POST);

    $contactName    = trim($contactname);
    $contactEmail   = trim($contactemail);
    $contactMessage = trim($contactmessage);
    $contactSubject = trim($contactsubject);
    $contactNumber  = trim($contactnumber);

    
    
    $sql= "SELECT * FROM contact_us";
    $result = mysqli_query($conn, $sql);
    if($result){
        $sql = "INSERT INTO contact_us(contact_id,contact_name,contact_email,contact_phone_number,contact_subject,contact_message) VALUES(NULL,'$contactName','$contactEmail','$contactNumber','$contactSubject','$contactMessage')";
        $result = mysqli_query($conn, $sql);
        if($result == true){
            echo 1;
        }else{
            echo 0;
        }
    }else{
        echo -2;
    }


?>

