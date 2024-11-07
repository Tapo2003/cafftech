<?php
    session_start();
    require_once('../assets/dbconn.php');
    $sql = "SELECT DISTINCT statename, state_id FROM states ORDER BY statename ASC";	
    $result = mysqli_query($conn, $sql) or die(mysql_error());
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){	
            $state[]   			 = $row;			
        }
        echo json_encode($state);
    }else{
        echo 0;
    }
?>