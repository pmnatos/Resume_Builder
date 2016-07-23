<!-- page-finish.php -->
<style  type="text/css">.btn-logout{ margin-left: 1050px} </style>
<div class="page page-finish" >
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
    $name = '';
    $sql ="SELECT NAME FROM USERS WHERE USER_ID = ".$_COOKIE['user_session'];
  	$result = $conn->query($sql);
  	foreach ($result as $row) {
      $name = $row['NAME'];
  	}	
  	echo'	
    <div class="btn-logout">
          <a href="logout.php" class="btn btn-primary">Logout</a>
      </div>
      </br></br>
    </br></br><h2>Congratulations &nbsp'.$row['NAME'].'.</br>You just created your first Resume!!!<h2>  
	
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<a href="#edit" class="btn btn-success">Edit My Resume</a>
    		</div>
  		</div>
  		<div class="btn-group btn-group">
    		<div class="btn-group">
      			<a href="#view" class="btn btn-primary">View My Resume</a>
    		</div>
  		</div> ';
  }
  else
  {
  	echo '</br></br></br></br><h1>Please Login!!!<h1>';
  }
  ?>
</div>