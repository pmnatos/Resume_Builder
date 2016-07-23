<!-- page-del_achievements.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-logout{ margin-left: 1050px}
</style>
<div class="page page-del_achievements">
<h1>Achievement List</h1>
</br></br></br>
<div class="container">
  <div class="btn-logout">
      <a href="admin_logout.php" class="btn btn-primary">Logout</a>
  </div>
  </br></br></br>
  <form action="page-del_achievements.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="del_achievements">Achievement :</label>
      <div class="col-sm-4">
        <select class="form-control" id="del_achievements" name="del_achievements" required="TRUE"> 
        <?php
            require_once 'connect.php'; 
            $user_id = $_COOKIE['user_session'];
            $sql ="SELECT * FROM ACHIEVEMENTS WHERE USER_ID ='$user_id'";
            $result = $conn->query($sql);
            foreach ($result as $row) {
            $achievement = $row['DESCRIPTION'];
            echo "<option>$achievement</option>";
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
if(isset($_POST['del_achievements']))
{
  $achievement = $_POST['del_achievements'];
  $user_id = $_COOKIE['user_session'];
  $sql = "DELETE FROM ACHIEVEMENTS WHERE USER_ID ='$user_id' AND DESCRIPTION ='$achievement'";
  $result = $conn->query($sql);
  if($result)
  {
    echo "<h2>Deletion Successful.</h2>";
    header("location:http://localhost/dbms_prj/index.html#/del_achievements");
  }
  else
  {
    echo "<h2>Could not delete!!! Please retry.</h2>";
  }
}
?>
</div>
