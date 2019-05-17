<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyCollege | Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <h1>Registration Form</h1>
        <form method="post" action="../php/teacher-admin-register.php">
        <div class="form-group">
        <label for="Teacher ID">ID</label>
            <input name="txtID" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID"></div>
        
        <div class="form-group">
        <label for="Fullname">Fullname</label>
        <input txtFullname type="text" name="txtFullname" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Fullname">
        </div>
        
        <div class="form-group">
        <label for="Faculty">Faculty</label>
        <input name="txtFaculty" type="text" class="form-control" id="Address" aria-describedby="emailHelp" placeholder="Faculty">
        </div>
        
        <div class="form-group">
        <label for="Username">Username</label>
        <input name="txtUsername" type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Username">
        </div>
        
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input  name="txtPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <div class="form-group">
        <label for="Retype">Retype</label>
        <input name="txtRetype" type="password" class="form-control" id="Retype" placeholder="Retype">
        </div>
        <div class="form-group">
        <label for="AccountType">AccountType</label>
        <input  name="txtAccountType" type="text" class="form-control" id="AccountType" placeholder="AccountType">
        </div>
        <button type="submit" name="btnRegister" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>