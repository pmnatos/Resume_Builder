<!-- page-admin_signup.php --> 
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style  type="text/css">.page a{ margin-top: 0px;} </style>
<div class="page page-admin_signup">
<h1>Signup</h1>
</br></br></br>
<div class="container">
<form action="page-admin_signup.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="admin_name">Name:</label>
      <div class="col-sm-4">
        <input type="name" class="form-control" id="admin_name" name="admin_name" placeholder="Enter name" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="admin_email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="admin_email" name="admin_email" placeholder="Enter email" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="admin_pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="admin_pwd" name="admin_pwd" placeholder="Enter password" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="admin_repwd">Confirm Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="admin_repwd" name="admin_repwd" placeholder="Confirm password" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Sign up</button>
        <a href="http://localhost/dbms_prj/index.html#/admin_login" class="btn btn-primary">Login</a>
      </div>
    </div>
</form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['admin_name']) && isset($_POST['admin_email']) && isset($_POST['admin_pwd']) && isset($_POST['admin_repwd']))
{
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_pwd = md5($_POST['admin_pwd']);
  $admin_repwd = md5($_POST['admin_repwd']);
  $admin_id;
 
  if($admin_pwd === $admin_repwd)
  {
    $sql = "SELECT EMAIL_ID FROM ADMIN WHERE EMAIL_ID = '$admin_email'";
    $result = $conn->query($sql);
    foreach ($result as $row) {
          { die("<h2>Admin already Exists!!!</h2>"); }
      }
    $sql = "INSERT INTO ADMIN VALUES ('','$admin_name','$admin_email','$admin_pwd')";
    $result = $conn->query($sql);
    if($result)
      {   echo "<h2>Admin Registered Successfully.</h2>"; 
          header("location:http://localhost/dbms_prj/index.html#/admin_login");
      }
    }    
  else
  {
      echo "<h2>Passwords Don't Match!!!</h2>";
  } 
}
?>
</div>

