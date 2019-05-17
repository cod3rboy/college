<?php
if(isset($_POST['btnSubmit'])){
    $facultyID = $_POST['txtFacultyID'];
    $subject = $_POST['txtSubject'];
    
    //For File
    $note = $_FILES['myFile']['name'];
    $size = $_FILES['myFile']['size'];
    $temp = $_FILES['myFile']['tmp_name'];
    $type = $_FILES['myFile']['type'];
    $error = $_FILES['myFile']['error'];
    
   
    
    if($error==0){  
        include "connect.php";
        
        $query = "INSERT INTO notes (FacultyID,Subject,Notes) VALUES ('$facultyID','$subject','$note')";
        mysql_query($query);
        
        move_uploaded_file($temp,"../notes/$note");
        echo "Notes Uploded";
        
    }else{
        echo "Error";
    }
}

?>