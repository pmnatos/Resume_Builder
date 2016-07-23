<!-- page-strengths.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-strengths">
<h1>Your Strengths</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-strengths.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="strength_type">Strength:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="strength_type" name="strength_type" placeholder="Your Strength" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/phone_no" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['strength_type']))
{
  $strength_type = $_POST['strength_type'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO STRENGTHS VALUES ('','$user_id','$strength_type')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/strengths");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
