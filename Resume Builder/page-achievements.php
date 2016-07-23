<!-- page-achievements.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-achievements">
<h1>Your Achievements</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-achievements.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="description">Description:</label>
      <div class="col-sm-4">
      <textarea class = "form-control" rows = "5" cols="8" name="description" placeholder="Place your achievement here."></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/experiences" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['description']))
{
  $desc = $_POST['description'];
  $user_id = $_COOKIE['user_session'];
  $sql = "INSERT INTO ACHIEVEMENTS VALUES ('','$user_id','$desc')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/achievements");
  }
  else
  {
    echo "<h2>Please re-enter short description!!!</h2>";
  }

}
?>
</div>
