<!-- page-login.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
.page a{ margin-top: 0px;}
.link {padding-left: 220px}
</style>
<div class="page page-login">
<h1>Login</h1>
</br></br></br>
<div class="container">
<form action="page-login.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required="TRUE">
      </div>
    </div>
    <a href="http://localhost/dbms_prj/index.html#/resetpswd" class="link">Forgot Password??</a>
    </br></br>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Login</button>
        <a href="http://localhost/dbms_prj/index.html#/signup" class="btn btn-primary">Sign up</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['email']) && isset($_POST['pwd']))
{
  $email = $_POST['email'];
  $pwd = md5($_POST['pwd']);

    $sql = "SELECT EMAIL_ID FROM USERS WHERE EMAIL_ID = '$email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
      {  
        
        $sql = "SELECT * FROM USERS WHERE EMAIL_ID = '$email' AND PASSWORD = '$pwd'";
        $result = $conn->query($sql);
        /*if($result->fetch_assoc() === $pwd)
          { 
            $cookie_name = "user_session";
            $sql = "SELECT USER_ID FROM USERS WHERE EMAIL_ID = '$email'";
            $result = $conn->query($sql);
            $cookie_value = $result->fetch_assoc();
            setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
            header("location:http://localhost/dbms_prj/index.html#/");
          }
          else
          {
            echo"<h2>Invalid Password/Email ID</h2>";
          }*/

          foreach ($result as $row) {
            $cookie_name = "user_session";
            $cookie_value = $row['USER_ID'];
            setcookie($cookie_name, $cookie_value, time() + (43200), "/"); // 86400 = 1 day
            header("location:http://localhost/dbms_prj/index.html#/menu");
          }
          echo "<h2>Invalid Password/Email ID</h2>";
      }
    else
    {
      echo "<h2>Please Register!!!</h2>";
    }

}


?>
</div>
