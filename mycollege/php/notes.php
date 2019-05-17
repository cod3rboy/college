<?php

    $subject = $_POST['txtSubject'];
    $faculty = $_POST['txtFaculty'];
    


    //Connect to MySQL
    include "connect.php";

    $sql = "INSERT INTO notes (FacultyID,Subject) VALUES ('$faculty','$subject')";
   mysql_query($sql);
   
        echo "Notes Published";
    header('Refresh:1;../teacher/post-notes.php');
    
    
    

?>