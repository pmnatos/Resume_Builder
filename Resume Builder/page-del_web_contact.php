<!-- page-del_web_contact.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-logout{ margin-left: 1050px}
</style>
<div class="page page-del_web_contact">
<h1>Web Contact URLs</h1>
</br></br></br>
<div class="container">
  <div class="btn-logout">
      <a href="admin_logout.php" class="btn btn-primary">Logout</a>
  </div>
  </br></br></br>
  <form action="page-del_web_contact.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="del_web_contact">Link :</label>
      <div class="col-sm-4">
        <select class="form-control" id="del_web_contact" name="del_web_contact" required="TRUE"> 
        <?php
            require_once 'connect.php'; 
            $user_id = $_COOKIE['user_session'];
            $sql ="SELECT * FROM WEB_CONTACT WHERE USER_ID = '$user_id'";
            $result = $conn->query($sql);
            foreach ($result as $row) {
            $web_contact = $row['WEB_URL'];
            echo "<option>$web_contact</option>";
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
if(isset($_POST['del_web_contact']))
{
  $web_contact = $_POST['del_web_contact'];
  $user_id = $_COOKIE['user_session'];
  $sql = "DELETE FROM WEB_CONTACT WHERE USER_ID ='$user_id' AND WEB_URL ='$web_contact'";
  $result = $conn->query($sql);
  if($result)
  {
    echo "<h2>Deletion Successful.</h2>";
    header("location:http://localhost/dbms_prj/index.html#/del_web_contact");
  }
  else
  {
    echo "<h2>Could not delete!!! Please retry.</h2>";
  }
}
?>
</div>
