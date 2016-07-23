<!-- page-academic.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-academic">
<h1>Academic Records</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-academic.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="course">Course:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="course" name="course" placeholder="Enter course" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="institution">Institution:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="institution" name="institution" placeholder="Enter institution" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="graduation_year">Graduated year:</label>
      <div class="col-sm-4">
        <select class="form-control" id="graduation_year" name="graduation_year" required="TRUE"> 
        <?php for($i=1990;$i<=date("Y");$i++){
            echo "<option>$i</option>";
          } ?>
          <option>Pursuing</option>       
        <!--input type="text" class="form-control" id="graduation_year" name="graduation_year" placeholder="Enter graduated year" required="TRUE"-->
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="percentage">Percentage:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="percentage" name="percentage" placeholder="Enter percentage" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/my_skill" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['course']) && isset($_POST['institution']) && isset($_POST['graduation_year']) && isset($_POST['percentage']))
{
  $course = $_POST['course'];
  $institution = $_POST['institution'];
  $graduation_year = $_POST['graduation_year'];
  $percentage = $_POST['percentage'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO ACADEMIC_RECORD VALUES ('','$user_id','$course','$institution','$graduation_year','$percentage')";
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
