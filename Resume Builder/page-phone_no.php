<!-- page-phone_no.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-phone_no">
<h1>Other Contact Numbers</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-phone_no.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="phone_no">Phone Number:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Your Number" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/web_contact" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['phone_no']))
{
  $phone_no = $_POST['phone_no'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO USER_PHONE_NO VALUES ('$user_id','$phone_no')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/phone_no");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
