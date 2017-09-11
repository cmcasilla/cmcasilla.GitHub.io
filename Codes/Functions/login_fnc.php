<?php
	session_start();
	require"connection.php";

	$sql="SELECT * FROM tbl_users WHERE Username='".$_POST['uname']."' AND Password='".$_POST['pword']."'";
	$result=$con->query($sql);
	$numrows=$result->rowCount();
	if($numrows>=1){
	$_SESSION["login"]=true;
	$_SESSION["user"]=$_POST["uname"];
	header("location: ../Files/home.php?uname=".$_POST["uname"]);
	}else{
	header("location: ../../index.php?login_attempt=14334453");
	}