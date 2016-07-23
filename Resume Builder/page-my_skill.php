<!-- page-my_skill.php -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .page a{ margin-top: 0px;}
  .btn-group{margin-left: 1050px;}
</style>
<div class="page page-my_skill">
<h1>Soft/Technical Skills</h1>
</br></br>
<div class="btn-group">
    <a href="#menu" class="btn btn-success">Menu</a>
</div>
</br></br></br>
<div class="container">
<form action="page-my_skill.php" class="form-horizontal" role="form" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="category">Category:</label>
      <div class="col-sm-4">
        <select class="form-control" id="category" name="category" required="TRUE"> 
          <option>Soft Skill</option>
          <option>Technical Skill</option>    
        </select>
      </div>
    </div>
    <!--div class="form-group">
      <label class="control-label col-sm-4" for="category">Category:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="category" name="category" placeholder="Soft/Technical" required="TRUE">
      </div>
    </div-->
    <div class="form-group">
      <label class="control-label col-sm-4" for="skill_group">Skill Group:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="skill_group" name="skill_group" placeholder="DB/Web/Languages" required="TRUE">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="title">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="title" name="title" placeholder="C/C++/MySQL" required="TRUE">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="http://localhost/dbms_prj/index.html#/achievements" class="btn btn-primary">Next</a>
      </div>
    </div>
 </form>
</div>
<?php
require_once 'connect.php';
if(isset($_POST['skill_group']) && isset($_POST['category']) && isset($_POST['title']))
{
  $skill_group = $_POST['skill_group'];
  $category = $_POST['category'];
  $title = $_POST['title'];
  $user_id = $_COOKIE['user_session'];

  $sql = "INSERT INTO SKILLS VALUES ('','$user_id','$category','$skill_group','$title')";
  $result = $conn->query($sql);
  if($result)
  {
    header("location:http://localhost/dbms_prj/index.html#/my_skill");
  }
  else
  {
    echo "<h2>Please re-enter the details!!!</h2>";
  }

}
?>
</div>
