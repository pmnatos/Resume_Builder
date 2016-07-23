<!-- logout.php -->
<?php
setcookie("user_session","",time()-(86400),"/");
header("location:http://localhost/dbms_prj/index.html#/login");
?>