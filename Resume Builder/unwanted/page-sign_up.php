<?php
require_once 'connect.php';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['pwd']) && isset($_POST['repwd']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$pwd = $_POST['pwd'];
	$repwd = $_POST['repwd'];

	if($pwd === $repwd)
	{
		$sql = "SELECT EMAIL_ID FROM USERS WHERE EMAIL_ID =".$email;
		$result = $conn->query($sql);
		if(!$result)
			{  
			  	$sql = "INSERT INTO USERS VALUES ('','$name','$email','$phone_no',SHA2('$pwd',256))";
				$result = $conn->query($sql);
				if($result)
					{ echo "<h1>User Registered Successfully.</h1>"; }
			}
		else
		{
			echo "<h1>User already Exists!!!</h1>";
		}
	}
	else
	{
		echo "<h1>Passwords Don't Match!!!</h1>";
	}	

}
else
{
	echo "<h1>Please Enter all the fields!!!</h1>";
}

?>
</br></br></br>
 <div class="btn-group">
      <a href="#login" class="btn btn-success">LOGIN</a>
 </div>