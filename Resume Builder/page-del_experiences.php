<!-- page-del_experiences.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-logout{ margin-left: 1050px}
</style>
<div class="page page-del_experiences">
<h1>Experience List</h1>
</br></br></br>
<div class="container">
  <div class="btn-logout">
      <a href="admin_logout.php" class="btn btn-primary">Logout</a>
  </div>
  </br></br></br>
  <form action="page-del_experiences.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="del_experiences">Company :</label>
      <div class="col-sm-4">
        <select class="form-control" id="del_experiences" name="del_experiences" required="TRUE"> 
        <?php
            require_once 'connect.php'; 
            $user_id = $_COOKIE['user_session'];
            $sql ="SELECT * FROM EXPERIENCES WHERE USER_ID ='$user_id'";
            $result = $conn->query($sql);
            foreach ($result as $row) {
            $experience = $row['COMPANY'];
            echo "<option>$experience</option>";
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
if(isset($_POST['del_experiences']))
{
  $experience = $_POST['del_experiences'];
  $user_id = $_COOKIE['user_session'];
  $sql = "DELETE FROM EXPERIENCES WHERE USER_ID ='$user_id' AND COMPANY ='$experience'";
  $result = $conn->query($sql);
  if($result)
  {
    echo "<h2>Deletion Successful.</h2>";
    header("location:http://localhost/dbms_prj/index.html#/del_experiences");
  }
  else
  {
    echo "<h2>Could not delete!!! Please retry.</h2>";
  }
}
?>
</div>
