<?php
	$link=mysqli_connect("localhost","root","","art_galley");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>