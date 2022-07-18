<?php
	require("includes/config.php");

	if (!$_REQUEST['id']) die("Please specify a template ID by calling this URL such as https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?id=1<br>");

	$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName, 3306);
	mysqli_select_db($conn, $dbName);
        if(mysqli_connect_errno()) {
                die("connection failed: ". mysqli_connect_error(). " (" . mysqli_connect_errno(). ")");
        }
	$result = mysqli_query($conn, "SELECT * FROM template WHERE id=".$_REQUEST['id']);
	$row = mysqli_fetch_assoc($result);
	echo $row['html_text'];
?>
