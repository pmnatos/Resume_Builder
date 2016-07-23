<!-- page-edit.php -->
<style  type="text/css">
  .btn-logout{ margin-left: 1050px}
  .page a{ margin-top: 0px;}
</style>
<div class="page page-edit">
  <?php
  	require_once 'connect.php';
  	/*if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    print_r($_COOKIE);
	} else {
    echo "Cookies are disabled.";
	}*/
    if(isset($_COOKIE['user_session'])){
	  $user_id = $_COOKIE['user_session'];   
    $sql ="SELECT NAME FROM USERS WHERE USER_ID = ".$_COOKIE['user_session'];
  	$result = $conn->query($sql);
  	foreach ($result as $row) {
  		echo "<h2>WELCOME </br>".$row['NAME']."</h2>";
  	}	
  	echo'	
		  <div class="btn-logout">
      		<a href="logout.php" class="btn btn-primary">Logout</a>
    	</div>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <a href="#view" class="btn btn-success">View Resume</a>
        </div>
      </div>
  		</br></br>
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<p>Academic Qualification :&nbsp &nbsp &nbsp &nbsp<a href="#academic" class="btn btn-success">Add</a></p>
    		</div>
  		</div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p> Address : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="#update_address" class="btn btn-success">Update</a>
        </div>
      </div></br>
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<p> Achievements :&nbsp &nbsp &nbsp<a href="#achievements" class="btn btn-success">Add</a>
            <a href="#del_achievements" class="btn btn-danger">Delete</a></p>
    		</div>
  		</div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Experiences :&nbsp &nbsp &nbsp &nbsp &nbsp<a href="#experiences" class="btn btn-success">Add</a>
            <a href="#del_experiences" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Projects :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="#projects" class="btn btn-success">Add</a>
            <a href="#del_projects" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Skills :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#my_skill" class="btn btn-success">Add</a>
            <a href="#del_skills" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Strengths :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href="#strengths" class="btn btn-success">Add</a>
            <a href="#del_strengths" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Phone Number :&nbsp &nbsp<a href="#phone_no" class="btn btn-success">Add</a>
            <a href="#del_phone_no" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Web Contact :&nbsp &nbsp &nbsp &nbsp<a href="#web_contact" class="btn btn-success">Add</a>
            <a href="#del_web_contact" class="btn btn-danger">Delete</a></p>
        </div>
      </div></br>
      <div class="btn-group btn-group">
        <div class="btn-group">
            <p>Hobbies :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#hobbies" class="btn btn-success">Add</a>
            <a href="#del_hobbies" class="btn btn-danger">Delete</a></p>
        </div>
      </div> ';
  }
  else
  {
  	echo '</br></br></br></br><h1>Please Login!!!<h1>';
  }
  ?>
</div>