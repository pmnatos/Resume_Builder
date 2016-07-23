<!-- page-experiences.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-experiences">
<h1>Your Experiences</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-experiences.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="company">Company:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="designation">Designation:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter designation" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="worked_from">Worked From:</label>
      <div class="col-sm-4">
        <select class="form-control" id="worked_from" name="worked_from" required="TRUE"> 
        <?php for($i=1990;$i<=date("Y");$i++){
            echo "<option>$i</option>";
          } ?>       
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="worked_till">Worked Till:</label>
      <div class="col-sm-4">
        <select class="form-control" id="worked_till" name="worked_till" required="TRUE"> 
        <?php for($i=1990;$i<=date("Y");$i++){
            echo "<option>$i</option>";
          } ?>       
        </select>
      </div>
    </div>
    <!--div class="form-group">
      <label class="control-label col-sm-4" for="worked_from">Worked From:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="worked_from" name="worked_from" placeholder="From" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="worked_till">Worked Till:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="worked_till" name="worked_till" placeholder="Till" required="TRUE">
      </div>
    </div-->
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/projects" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['company']) && isset($_POST['designation']) && isset($_POST['worked_from']) && isset($_POST['worked_till']))
{
  $company = $_POST['company'];
  $designation = $_POST['designation'];
  $worked_from = $_POST['worked_from'];
  $worked_till = $_POST['worked_till'];
  $experience =  $worked_till - $worked_from;
  $user_id = $_COOKIE['user_session'];
  if($worked_till>=$worked_from)
  {
    $sql = "INSERT INTO EXPERIENCES VALUES ('','$user_id','$company','$designation','$worked_from','$worked_till', '$experience')";
    $result = $conn->query($sql);
    if($result)
    {
      header("location:http://localhost/dbms_prj/index.html#/experiences");
    }
    else
    {
      echo "<h2>Please re-enter the details!!!</h2>";
    }
  }
  else
  {
    echo "<h2>Please enter correct work details!!!</h2>";
  }

}
?>
</div>
