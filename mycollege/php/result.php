<?php
if(isset($_POST['btnRegister'])){
    $facultyid = $_POST['txtFacultyID'];
    $symbolno = $_POST['txtSymbolNo'];
    $status = $_POST['txtStatus'];
    
//    $subject = addslashes($subject);
//    $description = addslashes($description);

    //Connect to MySQL
    include "connect.php";

    $sql = "INSERT INTO result (SymblNo,FacultyID,Status) VALUES ('$symbolno','$facultyid','$status')";
   mysql_query($sql);
   
        echo "result Published";
    header('Refresh:1;../admin/post-result.php');
    
    
}else{
    echo "Somethig Wrong";
}
    

?>