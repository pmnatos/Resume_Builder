<!-- admin_logout.php -->
<?php
setcookie("admin_session","",time()-(86400),"/");
header("location:http://localhost/dbms_prj/index.html#/admin_login");
?>