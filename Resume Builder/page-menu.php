<!-- page-menu.php -->
<style  type="text/css">.btn-logout{ margin-left: 1050px} </style>
<div class="page page-menu">
  <?php
  	require_once 'connect.php';
  	/*if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    print_r($_COOKIE);
	} else {
    echo "Cookies are disabled.";
	}*/
    if(isset($_COOKIE['user_session'])){
    echo'	
		<div class="btn-logout">
      		<a href="logout.php" class="btn btn-primary">Logout</a>
    	</div>
  		</br></br></br>';
	$user_id = $_COOKIE['user_session'];   
    $sql ="SELECT NAME FROM USERS WHERE USER_ID = ".$_COOKIE['user_session'];
  	$result = $conn->query($sql);
  	foreach ($result as $row) {
  		echo "<h1>WELCOME </br>".$row['NAME']."</h1>";
  	}	
  	$is_finished ='';
  	$sql ="SELECT * FROM FINISHED WHERE USER_ID = '$user_id'";
  	$result = $conn->query($sql);
  	foreach ($result as $row) {
  		$is_finished = $row['STATUS'];
  	}	
  	if($is_finished === 'TRUE')
  	{
  		echo '
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<a href="#edit" class="btn btn-success">Edit Existing Resume</a>
    		</div>
  		</div>
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<a href="#view" class="btn btn-warning">View Resume</a>
    		</div>
  		</div> ';
  	}
  	else
  	{
  		echo '
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<a href="#description" class="btn btn-warning">Create New Resume</a>
    		</div> ';
  	}	
  }
  else
  {
  	echo '</br></br></br></br></br></br></br></br></br></br><h1>Please Login!!!<h1>';
  }
  ?>
</div>