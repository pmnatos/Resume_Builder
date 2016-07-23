<!-- page-view.php-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/readable/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css">
.username-blk, .address-blk, .phone_no-blk, .email_id-blk, .description-blk, .skill-blk, .strengths-blk, .projects-blk, .hobbies-blk, .achievements-blk, .web_url-blk, .research-blk,.academic-blk, .experience-blk {text-align:left;padding-left: 40px}
</style>

<!--style type="text/css">
.username-blk, .address-blk, .phone_no-blk, .email_id-blk, .description-blk, .skill-blk, .strengths-blk, .projects-blk, .hobbies-blk, .achievements-blk, .web_url-blk, .research-blk, .academic-blk, .experience-blk{color:FFF8E1 }
</style-->



<div class="page page-view">
<div class='username-blk'>
	<p>
		<?php
			require_once 'connect.php';
			$user_id = $_COOKIE['user_session'];
			$sql = "SELECT * FROM USERS WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "<b>".$row['NAME']."</b>";
			}
		?>
	</p>
</div>

<div class='address-blk'>
	<p>
		<?php
			require_once 'connect.php';
			$user_id = $_COOKIE['user_session'];
			$sql = "SELECT * FROM USER_ADDRESS WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "<p>".$row['ADDRESS']."</p>";
			}
		?>
	</p>
</div>

<div class='phone_no-blk'>
	<p>
		<?php
			require_once 'connect.php';
			$user_id = $_COOKIE['user_session'];
			$sql = "SELECT * FROM USER_PHONE_NO WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo $row['PHONE_NO']."&nbsp &nbsp";
			}
		?>
	</p>
</div>

<div class='email_id-blk'>
	<p>
		<?php
			require_once 'connect.php';
			$user_id = $_COOKIE['user_session'];
			$sql = "SELECT * FROM USERS WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo $row['EMAIL_ID'];
			}
		?>
	</p>	
</div>
<hr></hr>
<div class='description-blk'>
	<p>
		<?php
			require_once 'connect.php';
			$user_id = $_COOKIE['user_session'];
			$sql = "SELECT * FROM DESCRIPTION WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "<p>".$row['ABOUT']."</p>";
			}
		?>
	</p>	
</div>
<hr></hr>
<div class='academic-blk'>
	<p><b>Academic Record:</b></br>
		<table border>
			<tr>
				<th>Course</th>
				<th>Institution</th>
				<th>Gradated Year</th>
				<th>Percentage</th>
			</tr>	
				<?php
				require_once 'connect.php';
				$user_id = $_COOKIE['user_session'];
				$sql = "SELECT * FROM ACADEMIC_RECORD WHERE USER_ID = '$user_id'";
				$result = $conn->query($sql);
				foreach ($result as $row) {
				echo "<tr>
						<td>".$row['COURSE']."</td>
					  	<td>".$row['INSTITUTION']."</td>
					  	<td>".$row['GRAD_YEAR']."</td>
					  	<td>".$row['PERCENTAGE']."</td>
					  </tr>";
				}
				?>
		</table>
	</p>
</div>
<hr></hr>
<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM SKILLS WHERE USER_ID = '$user_id' AND CATEGORY = 'Soft Skill'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='skill-blk'>
	<p><b> Soft Skills:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM SKILLS WHERE USER_ID = '$user_id' AND CATEGORY ='Soft Skill' GROUP BY SKILL_GROUP";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['SKILL_GROUP'].":&nbsp&nbsp".$row['TITLE']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM SKILLS WHERE USER_ID = '$user_id' AND CATEGORY ='Technical Skill'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='skill-blk'>
	<p><b> Technical Skills:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM SKILLS WHERE USER_ID = '$user_id' AND CATEGORY ='Technical Skill' GROUP BY SKILL_GROUP";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['SKILL_GROUP'].":&nbsp&nbsp".$row['TITLE']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM EXPERIENCES WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='experience-blk'>
	<p><b> Experience:</b></br>
		<table border>
			<tr>
				<th>Company</th>
				<th>Designation</th>
				<th>From</th>
				<th>To</th>
				<th>Experience</th>
			</tr>";
				
				require_once 'connect.php';
				$user_id = $_COOKIE['user_session'];
				$sql = "SELECT * FROM EXPERIENCES WHERE USER_ID = '$user_id'";
				$result = $conn->query($sql);
				foreach ($result as $row) {
				echo "<tr>
						<td>".$row['COMPANY']."</td>
					  	<td>".$row['DESIGNATION']."</td>
					  	<td>".$row['POST_FROM']."</td>
					  	<td>".$row['POST_TO']."</td>
					  	<td>".$row['EXP_YEARS']."</td>
					  </tr>";
				}
				
		echo"</table>
	</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM STRENGTHS WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo "<div class='strengths-blk'>
	<p><b> Strengths:</b></br>";

			require_once 'connect.php';
			$sql = "SELECT * FROM STRENGTHS WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['TYPE']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM PROJECTS WHERE USER_ID = '$user_id' AND CATEGORY = 'Project'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='projects-blk'>
	<p><b> Projects:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM PROJECTS WHERE USER_ID = '$user_id' AND CATEGORY = 'Project'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['PRJ_NAME'].":&nbsp".$row['PRJ_DESC']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM PROJECTS WHERE USER_ID = '$user_id' AND CATEGORY = 'Research'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='research-blk'>
	<p><b> Research Papers:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM PROJECTS WHERE USER_ID = '$user_id' AND CATEGORY = 'Research'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['PRJ_NAME'].":&nbsp".$row['PRJ_DESC']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM ACHIEVEMENTS WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='achievements-blk'>
	<p><b> Achievements:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM ACHIEVEMENTS WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['DESCRIPTION']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM HOBBIES WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='hobbies-blk'>
	<p><b> Hobbies:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM HOBBIES WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['HOBBY_TYPE']."</br>";
			}
		
	echo"</p>	
</div>
<hr></hr>";
}
?>

<?php
require_once 'connect.php';
$user_id = $_COOKIE['user_session'];
$sql = "SELECT * FROM WEB_CONTACT WHERE USER_ID = '$user_id'";
$result = $conn->query($sql);
if($result->num_rows >0)
{
echo"<div class='web_url-blk'>
	<p><b> Web Contacts:</b></br>";
		
			require_once 'connect.php';
			$sql = "SELECT * FROM WEB_CONTACT WHERE USER_ID = '$user_id'";
			$result = $conn->query($sql);
			foreach ($result as $row) {
			echo "* ".$row['WEB_URL']."</br>";
			}
		
	echo"</p>	
</div>";
}
?>
</div>