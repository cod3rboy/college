<?php include "templates/head.php";?>
  <h1>Post Result</h1>
  <div class="col-md-5 offset-md-3">
    <form method="post" action="../php/result.php">
  <div class="form-group">
    <label for="FacultyID">FacultyID</label>
    <input type="text" name="txtFacultyID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter FacultyID">
  </div>
  <div class="form-group">
    <label for="Symbol number">Symbol Number</label>
    <input type="text" name="txtSymbolNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Symbol Number">
  </div>
<!--  <div class="form-group">-->
<!--    <label for="Date">Symbol Number</label>-->
<!--    <input name="txtDate" type="date" class="form-control" id="date">-->
<!--  </div>-->
  <div class="form-group form-check">
   <label class="form-check-label" for="exampleCheck1">Status</label><br>
    <textarea name="txtStatus" id="" cols="70" rows="10"></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary" name="btnRegister">Submit</button>
</form>
  </div>
  
<?php include "templates/footer.php";?>
   
      
