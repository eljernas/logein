<?php require_once("./parts/Header.php");?>


<?php

require_once('./parts/conect.php');


if (isset($_REQUEST['btn'])) {
  $username=$_REQUEST['name'];
  $userpassword=$_REQUEST['password'];
  $usercity=$_REQUEST['city'];

  $sql="INSERT INTO log (name,password,city) VALUES('$username','userpassword','usercity')";
  $result=mysqli_query($conn,$sql);
  if ($result) {
    header('location:logein.php');
  }


}







?>










<form method="POST" class="was-validated">
  

  <div class="col-md-12">
    <label for="validationServer01" class="form-label">Enter Your Name:</label>
    <input name="name" type="text" class="form-control is-valid" id="validationServer01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>


  <div class="col-md-12">
    <label for="validationServer02" class="form-label">Enter Your Password:</label>
    <input name="password" type="password" class="form-control is-valid" id="validationServer02"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12">
    <label for="validationServer03" class="form-label">City</label>
    <input name="city" type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="valid-feedback">
    Looks good!
    </div>
  </div>

  
  
  <div class="col-12">
    <button name="btn" class="btn btn-primary m-3" type="submit">Sign up!</button>
  </div>
</form>












<?php require_once("./parts/Footer.php"); ?>