<!-- page-del_user.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-logout{ margin-left: 1050px}
</style>
<div class="page page-del_user">
<h1>Registered Users</h1>
</br></br></br>
<div class="container">
  <div class="btn-logout">
      <a href="admin_logout.php" class="btn btn-primary">Logout</a>
  </div>
  </br></br></br></br>
  <form action="page-del_user.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="del_user">Name of User:</label>
      <div class="col-sm-4">
        <select class="form-control" id="del_user" name="del_user" required="TRUE"> 
        <?php
            require_once 'connect.php'; 
            $sql ="SELECT * FROM USERS";
            $result = $conn->query($sql);
            foreach ($result as $row) {
            $name = $row['NAME'];
            echo "<option>$name</option>";
          } 
        ?>      
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['del_user']))
{
  $user_name = $_POST['del_user'];
  $user_id = "";
  $cnt = 0;
  echo $cnt;
  $sql ="SELECT USER_ID FROM USERS WHERE NAME = '$user_name'";
  $result = $conn->query($sql);
  var_dump($result);
  foreach ($result as $row) {
     $user_id = $row['USER_ID'];
  }
  echo $user_id;
  $sql = "DELETE FROM WEB_CONTACT WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM USER_PHONE_NO WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM USER_ADDRESS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM STRENGTHS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM SKILLS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM PROJECTS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM HOBBIES WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM FINISHED WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM EXPERIENCES WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM DESCRIPTION WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM ACHIEVEMENTS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM ACADEMIC_RECORD WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  $sql = "DELETE FROM USERS WHERE USER_ID ='$user_id'";
  $result = $conn->query($sql);
  $cnt++;
  
  if($cnt === 13)
  {
    echo "<h2>Deletion Successful.</h2>";
    header("location:http://localhost/dbms_prj/index.html#/del_user");
  }
  else
  {
    echo "<h2>Could not delete the specified user!!!</h2>";
  }
}
?>
</div>
