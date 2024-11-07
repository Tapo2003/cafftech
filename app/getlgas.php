<?php
    session_start();
    require_once('../assets/dbconn.php');
    $sentState = $_GET['sentState'];
    // echo $sentState;
    // exit;
    $sql	= "SELECT lg_id, lg FROM states WHERE statename = '$sentState' ORDER BY lg_id ASC";
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){	
            $lgas[]   			 = $row;			
        }
        echo json_encode($lgas);
    }else{
        echo 0;
    }
?>