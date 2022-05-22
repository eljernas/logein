<?php require_once("./parts/Header.php");?>


<?php

require_once('./parts/conect.php');

session_start();
if (isset($_SESSION['user'])) {
  header('location:profile.php');
}



if (isset($_REQUEST['btn1'])) {
    $logname=$_REQUEST['namelog'];
    $logpass=$_REQUEST['passlog'];

    $sql="SELECT * FROM log WHERE name='$logname' LIMIT 1 ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result)>0) {
if ($logpass===$row['password']) {

    $_SESSION['user']['name']=$row['name'];
    $_SESSION['user']['password']=$row['password'];


    header('location:profile.php');
}
  }
}







?>





<form class="was-validated">
  

  <div class="col-md-12">
    <label for="validationServer01" class="form-label">Enter Your Name:</label>
    <input name="namelog" type="text" class="form-control is-valid" id="validationServer01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  
  <div class="col-md-12">
    <label for="validationServer02" class="form-label">Enter Your Password:</label>
    <input name="passlog" type="password" class="form-control is-valid" id="validationServer02"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
 

  
  
  <div class="col-12">
    <button name="btn1" class="btn btn-primary" type="submit">loge in!</button>
  </div>
</form>












<?php require_once("./parts/Footer.php"); ?>