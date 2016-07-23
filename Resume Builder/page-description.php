<!-- page-description.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">.page a{ margin-top: 0px;}</style>
<div class="page page-description">
<h1>Let's start </br> with short description about yourself</h1>
</br></br></br>
<div class="container">
<form action="page-description.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="description">Description:</label>
      <div class="col-sm-4">
      <textarea class = "form-control" rows = "8" cols="8" name="description"></textarea>
      </div>
    </div>
    </br>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Next</button>
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
	$sql = "INSERT INTO DESCRIPTION VALUES ('$user_id','$desc')";
	$result = $conn->query($sql);
	if($result)
	{
		header("location:http://localhost/dbms_prj/index.html#/address");
	}
	else
	{
		echo "<h2>Please re-enter short description!!!</h2>";
	}
}
?>
</div>