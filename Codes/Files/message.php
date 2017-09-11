<?php
	session_start();
	$sent="";
	if(isset($_GET["messagesent"])){
		$sent="Message Sent!";
		}

	require"../Functions/connection.php";
	$querya= "SELECT * FROM tbl_users WHERE Username='". $_SESSION["user"] ."'";			
	$resulta=$con->query($querya);
	while($dataa = $resulta->fetch(PDO::FETCH_BOTH)){
		$wname=$dataa[6];
	}

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

			<meta charset="UTF-8">
			<title>in[ART]side - The Newest Online Art Gallery and Community</title>
			<link rel="icon" href="" sizes="32by32">
			<link rel="stylesheet" href="../Styles/insideart.css">
			<link rel="stylesheet" href="../Styles/drop.css">

		</head>
		<style>
		*{
			margin:0;
			padding:0;
		}
		</style>
		
	<body>
			<div id="header_wrapper">
					<div id="header">
						<div id="logo">
							<img src="" height="50px" width="50px" alt="Inside Art">
								<span class="toleft">
								<h2>in[ART]side</h2>
								<p>The Newest Online Art Gallery and Community</p>
								</span>
								<span class="date" style="font-size:14pt;position:absolute;left:910px;top:12.5px;">
								<?php echo $date ;?>
								</span>
							</div>
						<div id="navbar_wrapper">
							<div id="navmenu">
								<ul id="menu">
									<li><a href="../../index.php">WELCOME</li>
									<li style="padding-left:15px;"><a href="browse.php">BROWSE</li>
								</ul>
							</div>
								<div id="search_bar">
									<form action="search_fnc.php" method="post">
										<input type="text" name="qry" style="height:25px;width:135px;">
										<input type="submit" Value="SEARCH" style="height:29px;width:68px;margin-left:-10px;">
									</form>
								</div> 
						</div>
						<div id="functions">
							<div id="dropdown">
							<p style="position:relative;left:150px;top:25px;">Welcome, <a onClick="myFunction()" class="dropbtn"><?php echo $_SESSION['user'];?></a></p>
							</div>
								<div id="myDropdown" class="dropdown-content">
								<a href="viewprof.php">View Profile</a>
								<a href="logout.php">Logout</a>
								</div>
								<span style="position:relative;left:470px;">
							<a href="message.php"><img src="../../Images/Icons/message.png" height="30px" width="30px"></a>
							<img src="../../Images/Icons/people.png" height="30px" width="30px">
							</span>
						</div>
					</div>
				</div>
				<div id="message">
					<div id="inbox">
<p style="font-size:20pt;font-weight:300;">Inbox</p>
		<table width="200" cellpadding="0" cellspacing=".8" border="1" style="position:relative;top:0px;">
		<tr>
			<?php
			while($resultss = $recordss->fetch(PDO::FETCH_BOTH)){	
			echo "<tr>";
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
			echo '<td><a href="viewmsg.php?msgID='.$resultss['msgID'].'" target="content" style="text-decoration:none;">'.'View'.'</a></td>';	
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
			echo '<td><a href="viewmsg.php?msgID='.$results['msgID'].'" target="content" style="text-decoration:none;">'.'View'.'</a></td>';
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
					<div id="viewmsg">
								<iframe name="content" style="height:300px;width:650px;"></iframe>
					</div>
					<div id="sendmsg">
<form method="post" action="send.php">
		<div  style="position:absolute;left:150px;top:100px;">
		<br />
		<label style="position:absolute;left:225px;top:25px;font-size:15pt;">To:</label>
		<input type="text" name="receiver" style="position:absolute;left:250px;top:20x;height:25px;width:600px;">
		<br/>
		<label style="position:absolute;left:190px;top:65px;font-size:15pt;">Subject:</label>
		<input type="text" name="subject" style="position:absolute;left:250px;top:65px;height:25px;width:600px;">
		<br/>
		<label style="position:absolute;left:200px;top:95px;font-size:15pt;">Message:</label>
		<br/>
		<textarea name="message" style="position:absolute;left:250px;top:120px;font-size:15pt;width:600px;height:50px;resize:none;"></textarea>
		<input type="submit" name="send" value="Send" style="position:absolute;left:750px;top:175px;font-size:15pt;width:100px;">
	
		<span style="color:blue;position:absolute;top:475px;left:400px;font-size:20pt;"> <?php echo $sent; ?></span>
		</div>
	</form>
					</div>
				</div>
		</div>

	</body>
	
</html>