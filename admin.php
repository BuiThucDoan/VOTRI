<?php
	
	//Start session
    session_start();

    //Set page title
    $pageTitle = 'Admin';

    //PHP INCLUDES
	
    include 'Includes/functions/functions.php'; 
    include 'Includes/templates/adminHeader.php';
    include 'Includes/templates/adminNavbar.php';
	include 'View/Admin/vAdmin.php';
    include 'Includes/templates/adminFooter.php';
?>