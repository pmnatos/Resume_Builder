<!-- page-resetpswd.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
.page a{ margin-top: 0px;}
.link {padding-left: 220px}
</style>
<div class="page page-resetpswd">
<h1>Password Reset</h1>
</br></br></br>
<div class="container">
<form action="page-resetpswd.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="TRUE">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Reset</button>
        <a href="http://localhost/dbms_prj/index.html#/login" class="btn btn-primary">Back</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['email']))
{
  $email = $_POST['email'];

    $sql = "SELECT EMAIL_ID FROM USERS WHERE EMAIL_ID = '$email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
      {  
        
        echo "<h2>Password Reset Link has been sent to the E-mail ID.</h2>";
        
        $to = "$email";
        $subject = "Password Reset";
        $message = "Please click on the link to reset the password.";
        // content-type when of sending email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // headers
        $headers .= 'From: <admin@resumemaker.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
        header("location:http://localhost/dbms_prj/index.html#/login");
        
      }
    else
    {
      echo "<h2>Please Register!!!</h2>";
    }

}

?>
</div>
