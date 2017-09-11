<?php
	session_start();
	require"connection.php";
	$loc =$_POST['loc'];
	$bio =$_POST['bio'];
	$lvlart=$_POST['artlvl'];
	$spec = $_POST['spec'];
	$rname = $_POST['rname'];
	$sql="UPDATE tbl_users SET Realname = '$rname' , Location = '$loc' , Bio = '$bio', lvlArtis = '$lvlart',  Specialty = '$spec' WHERE Username='".$_SESSION['user']."'";
	$result=$con->query($sql);
	header('location:../Files/viewprof.php?UpdateSuccess');
	?>