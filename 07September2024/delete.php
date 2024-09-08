<?php 

 $id = $_POST['mydata'];
 include_once("hakiconfig.php"); 

 $Law = $Haki->query("DELETE FROM students WHERE id ='$id'");

 if($Haki->affected_rows){
    echo "Successfully Deleted";
 }

 else{
    echo "Unable to Delete";
 }

?>