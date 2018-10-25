<?php 
session_start();
?>
<html>
<body>
<?php
$_SESSION["username"] = "Ridwan HK";
$_SESSION["password"] = "xxxxxxxxx";
print_r($_SESSION);
?>
<?php echo session_save_path(); ?>
</body>
</html>