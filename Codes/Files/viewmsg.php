<?php
	session_start();
	$sent="";
	if(isset($_GET["messagesent"])){
		$sent="Message Sent!";
		}
		
require"../Functions/connection.php";
$queryl= "SELECT * FROM tbl_users WHERE Username='". $_SESSION["user"] ."'";			
	$resultl=$con->query($queryl);
	while($datal = $resultl->fetch(PDO::FETCH_BOTH)){
	$wname=$data1[6];
	}


	$ID = $_GET['msgID'];
$querys= "SELECT * FROM tbl_msg WHERE msgID='".$_GET['msgID']."'";	
$resultsl=$con->query($querys);
while($datas = $resultsl->fetch(PDO::FETCH_BOTH)){
	$sen=$datas[0];
	$mes=$datas[2];
	$su=$datas[3];
	$time =$datas[6];
	$date =$datas[7];
}

$sql = "UPDATE tbl_msg SET view='Yes' WHERE msgID='".$_GET['msgID']."'";
$con->query($sql);

?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>Message</title>
		</head>
		<style>
		*{
			margin:0;
			padding:0;
		}
		</style>
		
	<body>
		<div style="font-size:15pt;">
		<p style="font-size:20pt;font-weight:300;">View Message</p>
		<p>From: <span name="sen"><?php echo $sen; ?></span></p>
		<p>Subject: <?php echo $su; ?></p>
		<div style="position:absolute;top:30px; left:550px;">
		<p>Time : <?php echo $time; ?></p>
		<p>Date : <?php echo $date; ?></p>
		</div>
		<p>Message:<br><table border="1" cellspacing ="0.5" cellpadding="0.5" style="position:relative;left:50px;"><tr><td style="width:540px;padding-left:50px;text-indent:10px;"><?php echo $mes ?></td></tr></table></p>
		</div>
				</div>
	
	</body>
	
</html>