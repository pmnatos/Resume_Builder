<!-- page-address.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">.page a{ margin-top: 0px;}</style>
<div class="page page-address">
<h1>Address</h1>
</br></br></br>
<div class="container">
<form action="page-address.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="address">Address:</label>
      <div class="col-sm-4">
      <textarea class = "form-control" rows = "5" cols="8" name="address" placeholder="Presently Residing Address"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Next</button>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['address']))
{
  $address = $_POST['address'];
  $user_id = $_COOKIE['user_session'];
  $sql ="INSERT INTO FINISHED VALUES ('$user_id','TRUE')";
  $result = $conn->query($sql);
  $sql = "INSERT INTO USER_ADDRESS VALUES ('$user_id','$address')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/academic");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
