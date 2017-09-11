<?php
	session_start();
	require"../Functions/connection.php";
		
	$querya= "SELECT * FROM tbl_test WHERE Email_Mobile='". $_SESSION["user"] ."'";			
	$resulta=$con->query($querya);
	while($dataa = $resulta->fetch(PDO::FETCH_BOTH)){
	$fname=$dataa[2];
	$lname=$dataa[3];
	}

	$wname = $fname ." " . $lname ;
	$sql = "SELECT * FROM tbl_msg WHERE msgto= '$wname' and view='Yes'";			
	$records = $con->query($sql);
	$sqls = "SELECT * FROM tbl_msg WHERE msgto= '$wname' and view='No'";			
	$recordss = $con->query($sqls);
	
	$queryb= "SELECT * FROM tbl_msg WHERE msgto='$wname'";			
	$resultb=$con->query($queryb);
	while($datab = $resultb->fetch(PDO::FETCH_BOTH)){
	$view = $datab[4];
	$sbj = $datab[3];
	}

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
		

		#viewmsg{
			display:block;
		}

		#content{
			position:absolute;
			top:88px;
			left:550px;
		}
		a{
			color:#000;
			text-decoration: none;
			margin-left: 15px;
		}
		</style>
		
	<body>
			<div id="header_wrapper" style="position:relative;top:0px;background-color:#039;display:block; height:85px;opacity:0.8">
		<h1 style="position:absolute;top:20px;left:150px;font-size:40px;font-family:arial;color:#fff;">facebook</a></h1>
		<form method="post" action="logout.php">
			<label style="position:absolute;left:1000px;top:35px;font-size:14pt;"><?php echo $wname; ?></label>
			<input type="submit" name="logout" Value="Logout" style="position:absolute;right:10%; top:30px;width:100px;height:30px">
		</form>
		</div>
		<div>

		<div  style="position:relative;left:25px;top:2px;display:block;width:500px;height:500px;border:1px solid #000;">
		<p style="font-size:20pt;font-weight:300;">Inbox</p>
		<table width="500" cellpadding="0" cellspacing=".8" border="1" style="position:relative;top:0px;">
		<tr>
			<?php
			while($resultss = $recordss->fetch(PDO::FETCH_BOTH)){	echo "<tr>";
			echo "<td>"."Time:".'</td>';
			echo "<td>".$resultss['msgTime']."</td>";
			echo "<td>"."Date:".'</td>';
			echo "<td>".$resultss['msgDate']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td width='60'>" ."Subject:". "</td>";
			echo "<td  width='150'>".$resultss['msgsbj']."</td>";
			$msg = strlen($resultss['msg']);
			$msgprnt ="";
			if($msg < 20){
				$msgprnt = $resultss['msg'];
			}else{
				$msgprnt = substr($resultss['msg'],0,20)."...";
			}
			echo "<td class='message' style='font-weight:bold;'>".$msgprnt."</td></strong>";
			echo '<td><a href="view.php?msgID='.$resultss['msgID'].'" target="content" style="text-decoration:none;">'.'View'.'</a></td>';	
			echo "</tr>";
			}
			while($results = $records ->fetch(PDO::FETCH_BOTH)){
			echo "<tr>";
			echo "<td>"."Time:".'</td>';
			echo "<td>".$results['msgTime']."</td>";
			echo "<td>"."Date:".'</td>';
			echo "<td>".$results['msgDate']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td width='60'>" ."Subject:". "</td>";
			echo "<td  width='150'>".$results['msgsbj']."</td>";
			$msg = strlen($results['msg']);
			$msgprnt ="";
			if($msg < 20){
				$msgprnt = $results['msg'];
			}else{
				$msgprnt = substr($results['msg'],0,20)."...";
			}
			echo "<td class='message'>".$msgprnt."</td>";
			echo '<td><a href="view.php?msgID='.$results['msgID'].'" target="content" style="text-decoration:none;">'.'View'.'</a></td>';
			echo "</tr>";
			}
			?>
			<tr>
			<td><a href="prevmsg.php">Prev</a></td>
			<td colspan="2" width="400">Note:Unread Messages will appear on top!</td>
			<td><a href="nextmsg.php">Next</a></td>
			</tr>
		</table>
		</div>
		<div id="content">
		<iframe name="content" style="height:500px;width:750px;"></iframe>
		</div>
		</div>
		<div>
		<a href="profile.php" style="margin-left:100px;">Back to Home</a>
		<a href="unread.php" style="margin-left:50px;">Mark All as Unread</a>
		<a href="read.php" style="margin-left:50px;" >Mark All as Read</a>


	</body>

</html>