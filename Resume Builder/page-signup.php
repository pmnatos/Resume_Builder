<!-- page-signup.php --> 
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style  type="text/css">.page a{ margin-top: 0px;} </style>
<div class="page page-signup">
<h1>Signup</h1>
</br></br></br>
<div class="container">
<form action="page-signup.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="name">Name:</label>
      <div class="col-sm-4">
        <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="phone_no">Phone Number:</label>
      <div class="col-sm-4">
        <input type="phone" class="form-control" id="phone_no" name="phone_no" placeholder="Enter phone number" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="repwd">Confirm Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="repwd" name="repwd" placeholder="Confirm password" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Sign up</button>
        <a href="http://localhost/dbms_prj/index.html#/login" class="btn btn-primary">Login</a>
      </div>
    </div>
</form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['pwd']) && isset($_POST['repwd']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $pwd = md5($_POST['pwd']);
  $repwd = md5($_POST['repwd']);
  $user_id;
 
  if($pwd === $repwd)
  {
    $sql = "SELECT EMAIL_ID FROM USERS WHERE EMAIL_ID = '$email'";
    $result = $conn->query($sql);
    foreach ($result as $row) {
          { die("<h2>User already Exists!!!</h2>"); }
      }
    $sql = "INSERT INTO USERS VALUES ('','$name','$email','$pwd')";
    $result = $conn->query($sql);
    if($result)
      { 
        $sql = "SELECT USER_ID FROM USERS WHERE EMAIL_ID = '$email'";
        $result = $conn->query($sql);
        foreach ($result as $row) {
          $user_id = $row['USER_ID'];
        }
        $sql = "INSERT INTO USER_PHONE_NO VALUES ('$user_id','$phone_no')";
        $result = $conn->query($sql);
        if($result)
        {
          echo "<h2>User Registered Successfully.</h2>"; 
          header("location:http://localhost/dbms_prj/index.html#/login");
        }
      }    
  }
  else
  {
    echo "<h2>Passwords Don't Match!!!</h2>";
  } 

}

?>
</div>

