<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
</head>
<body>
    <h1>Available Notes</h1>
    <table>
        <?php
            include "connect.php";
            $query = "SELECT * FROM notes";
            $result = mysql_query($query);
            while($record = mysql_fetch_assoc($result)){
                $notes = $record['Notes'];
                echo "<tr>";
                echo "<td><a href='../notes/$notes'>$notes</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html> 