<?php include "templates/header.php";?>


<?php
        include "../php/connect.php";
        $sql = "SELECT * FROM notice ORDER BY Date DESC ";
        $result = mysql_query($sql);
        while($record = mysql_fetch_assoc($result)){
            $subject = $record['Subject'];
            $des = $record['Description'];
            $date = $record['Date'];
            
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
            echo "<h4 class='alert-heading'>$subject</h4>";
            echo "<p> $des </p>";
            echo "<hr>";
            echo "<p class='mb-0'>Post Date: $date</p>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
        }


    
?>
<?php include "templates/footer.php";?>
