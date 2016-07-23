<!-- page-menu.php -->
<style  type="text/css">.btn-logout{ margin-left: 1050px} </style>
<div class="page page-admin_menu">
  <?php
    require_once 'connect.php';
    /*if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    print_r($_COOKIE);
  } else {
    echo "Cookies are disabled.";
  }*/
    if(isset($_COOKIE['admin_session'])){
    echo' 
    <div class="btn-logout">
          <a href="admmin_logout.php" class="btn btn-primary">Logout</a>
    </div>
      </br></br></br>';
    $admin_id = $_COOKIE['admin_session'];   
    $sql ="SELECT NAME FROM ADMIN WHERE ADMIN_ID = ".$_COOKIE['admin_session'];
    $result = $conn->query($sql);
    foreach ($result as $row) {
      echo "<h2>WELCOME </br>".$row['NAME']."</h2>";
    } 

      echo '
      <div class="btn-group btn-group">
        <div class="btn-group">
            <a href="#del_user" class="btn btn-danger">Delete User</a>
        </div> ';
    } 
  else
  {
    echo '</br></br></br></br></br></br><h1>Please Login!!!<h1>';
  }
  ?>
</div>