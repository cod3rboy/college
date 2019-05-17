<?php include "templates/head.php";?>
  <h1>Post Notice</h1>
  <div class="col-md-5 offset-md-3">
    <form method="post" action="../php/notice.php">
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="txtSubject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Subject">
  </div>
  <div class="form-group">
    <label for="Date">Date</label>
    <input name="txtDate" type="date" class="form-control" id="date">
  </div>
  <div class="form-group form-check">
   <label class="form-check-label" for="exampleCheck1">Descriptions</label><br>
    <textarea name="txtDescription" id="" cols="70" rows="10"></textarea>
    
  </div>
  <button type="submit" class="btn btn-primary" name="btnRegister">Submit</button>
</form>
  </div>
  
<?php include "templates/footer.php";?>
   
      
