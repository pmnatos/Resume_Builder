<!-- page-projects.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-projects">
<h1>Projects/Research Completed</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-projects.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="category">Category:</label>
      <div class="col-sm-4">
        <select class="form-control" id="category" name="category" required="TRUE"> 
          <option>Project</option>
          <option>Research</option>    
        </select>
      </div>
    </div>
    <!--div class="form-group">
      <label class="control-label col-sm-4" for="category">Category:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="category" name="category" placeholder="DB/Web/Languages" required="TRUE">
      </div>
    </div-->
    <div class="form-group">
      <label class="control-label col-sm-4" for="prj_name">Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="prj_name" name="prj_name" placeholder="Project/Research Name" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="description">Description:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/strengths" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['category']) && isset($_POST['prj_name']) && isset($_POST['description']))
{
  $category = $_POST['category'];
  $name = $_POST['prj_name'];
  $description = $_POST['description'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO PROJECTS VALUES ('','$user_id','$category','$name','$description')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/projects");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
