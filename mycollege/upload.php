<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="php/uploadphoto.php" method="post" enctype="multipart/form-data">
        <input type="text" name="txtFacultyID" placeholder="Faculty ID"> <br>
        <input type="text" name="txtSubject" placeholder="Subject">
        <label for="">Please select a photo</label>
        <input type="file" name="myFile">
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
</body>
</html>    