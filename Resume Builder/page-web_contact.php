<!-- page-web_contact.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-web_contact">
<h1>Web Contact URL</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-web_contact.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="web_url">Account Url:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="web_url" name="web_url" placeholder="LinkedIn/Personal Wesite URL" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/hobbies" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['web_url']))
{
  $web_url = $_POST['web_url'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO WEB_CONTACT VALUES ('$user_id','$web_url')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/web_contact");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
