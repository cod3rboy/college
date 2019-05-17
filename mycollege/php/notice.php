<?php
if(isset($_POST['btnRegister'])){
    $subject = $_POST['txtSubject'];
    $description = $_POST['txtDescription'];
    $date = $_POST['txtDate'];
    
    $subject = addslashes($subject);
    $description = addslashes($description);

    //Connect to MySQL
    include "connect.php";

    $sql = "INSERT INTO notice (Subject,Date,Description) VALUES ('$subject','$date','$description')";
   mysql_query($sql);
   
        echo "Notice Published";
    header('Refresh:1;../admin/post-notice.php');
    
    
}else{
    echo "Somethig Wrong";
}
    

?>