<!-- page-del_phone_no.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-logout{ margin-left: 1050px}
</style>
<div class="page page-del_phone_no">
<h1>Phone Number List</h1>
</br></br></br>
<div class="container">
  <div class="btn-logout">
      <a href="admin_logout.php" class="btn btn-primary">Logout</a>
  </div>
  </br></br></br>
  <form action="page-del_phone_no.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="del_phone_no">Number :</label>
      <div class="col-sm-4">
        <select class="form-control" id="del_phone_no" name="del_phone_no" required="TRUE"> 
        <?php
            require_once 'connect.php'; 
            $user_id = $_COOKIE['user_session'];
            $sql ="SELECT * FROM USER_PHONE_NO WHERE USER_ID = '$user_id'";
            $result = $conn->query($sql);
            foreach ($result as $row) {
            $phone_no = $row['PHONE_NO'];
            echo "<option>$phone_no</option>";
          } 
        ?>      
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Delete</button>
        <a href="http://localhost/dbms_prj/index.html#/edit" class="btn btn-primary">Back</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['del_phone_no']))
{
  $phone_no = $_POST['del_phone_no'];
  $user_id = $_COOKIE['user_session'];
  $sql = "DELETE FROM USER_PHONE_NO WHERE USER_ID ='$user_id' AND PHONE_NO ='$phone_no'";
  $result = $conn->query($sql);
  if($result)
  {
    echo "<h2>Deletion Successful.</h2>";
    header("location:http://localhost/dbms_prj/index.html#/del_phone_no");
  }
  else
  {
    echo "<h2>Could not delete!!! Please retry.</h2>";
  }
}
?>
</div>
