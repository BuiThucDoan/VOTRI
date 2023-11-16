<?php
	session_start();
	ob_start();
	
	if (isset($_GET['act'])) {
	  if ($_GET['act'] == 'login') {
		include_once('View/vlogin.php');
	  } 
	} else {
    include "connect.php";
    include 'Includes/functions/functions.php';
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";
	include_once ("View/vindex.php");
	include_once ("Includes/templates/footer.php");
}
?>

<?php 

?>