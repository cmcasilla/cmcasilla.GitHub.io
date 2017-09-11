<?php
	session_start();
	date_default_timezone_set('Asia/Manila');
	$date = date("m/d/y l");
	require"../Functions/connection.php";
	$user="SELECT * FROM tbl_users WHERE Username ='".$_SESSION['user']."'";
	$records = $con->query($user); 
	while($data = $records->fetch(PDO::FETCH_BOTH)){
		$uname = $data[1];
		$email = $data[2];
		$bday = $data[4];
		$sex = $data[5];
		$rname = $data[6];
		$location = $data[7];
		$bio = $data[8];
		$artlvl = $data[9];
		$spec = $data[10];
	}
	$qry="SELECT * FROM tbl_artworks WHERE Username ='".$_SESSION['user']."'";
	$qryrec = $con->query($qry); 						  


?>
<!DOCTYPE html>
	<html lang="en">
	<!--Head Section-->
		<head>
			<meta charset="UTF-8">
			<title>in[ART]side - The Newest Online Art Gallery and Community</title>
			<link rel="icon" href="Codes/Styles/logo12.png" sizes="32by32">
			<link rel="stylesheet" href="../Styles/insideart.css">
			<link rel="stylesheet" href="../Styles/drop.css">				
			<link rel="stylesheet" href="../Styles/drp_over.css">
 	


						<script>
						/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
		</head>
	<!--End Head Section-->

	<!--Start Body Section-->
		<body>
			<div id="page_wrapper">
				<div id="header_wrapper">
					<div id="header">
						<div id="logo">
							<img src="Codes/Styles/logo12.png" height="50px" width="50px" alt="Inside Art">
								<span class="toleft">
								
								<h2 style="font-family:AR Destine;color:#000000;">In[ART]sidE</h2>
								<p style="font-family:Rockwell;">The Newest Online Art Gallery and Community</p>								</span>
								<span class="date" style="font-size:14pt;position:absolute;top:12.5px; left:1180px;">
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
										<input type="text" name="qry" style="height:25px;width:205px;">
										
							<input type="submit" Value="SEARCH" style="height:29px;width:68px;margin-left:-10px;font-family:AR Destine;">			
									</form>
								</div> 
						</div>
						<div id="functions">
							<div id="dropdown">
							<p style="position:relative;left:80px;top:25px;">Welcome, <a onClick="myFunction()" class="dropbtn"><?php echo $_SESSION['user'];?></a></p>
							</div>	
							<div>
								<div id="myDropdown" class="dropdown-content">
								<a href="viewprof.php">View Profile</a>
								<a href="../Functions/logout.php">Logout</a>
								</div>
								<span style="position:relative;Float:left;margin-left:420px;margin-top:-6px;">
							<a href="message.php"><img src="../../Images/Icons/message.png" height="30px" width="30px"></a>
							<img src="../../Images/Icons/people.png" height="30px" width="30px">
							</span>
							</div>
						</div>
					</div>
				</div>

				<div id="body">
					<div id="perInf">
						<h2>Personal Information</h2>
						<table width = "400">
						<?php
						echo "<tr>";
						echo "<td colspan='2'><img src='' width='200' height='200'>"."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td width='100'>"."Real Name"."</td>";
						echo "<td>".$rname."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td width='100'>"."Location"."</td>";
						echo "<td>".$location."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td width='100'>"."Bio"."</td>";
						echo "<td>".$bio."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td width='100'>"."Birthday"."</td>";
						echo "<td>".$bday."</td>";
						echo "</tr>";
												echo "<tr>";
						echo "<td width='100'>"."Sex"."</td>";
						echo "<td>".$sex."</td>";
						echo "</tr>";
												echo "<tr>";
						echo "<td width='100'>"."Artist Level"."</td>";
						echo "<td>".$artlvl."</td>";
						echo "</tr>";
												echo "<tr>";
						echo "<td width='100'>"."Specialty"."</td>";
						echo "<td>".$spec."</td>";
						echo "</tr>";
						?>
						</table>
						<form action="updprof.php" method="post">
						<input type="submit" value="Update Profile">
						</form>
						<h2>Upload an Artwork</h2>
						<form action="../Functions/upload.php" method="post">
							<label>Add Image:</label>
							<input type="file" name="image_upload"><br>
							<label>Title:</label>
							<input type="text" name="title"><br>
							<label>Caption:</label>
							<textarea name="desc"></textarea><br>
							<label>Category:</label>
								<select name="cat">
									<option>Choose</option>	
									<option>Digital Art</option>
									<option>Mixed Media</option>
									<option>Painting</option>
									<option>Photography</option>
									<option>Sculpture</option>
								</select>
							<br>
							<label>Sub-Category</label>
							
							<br>
							<input type="submit" value="Post Artwork">
						</form>
						</div>
						<div id="Submitted" style="position:absolute; top:0px; left:350px;">
						<h2>Submitted Artworks</h2>
						
						 <?php
							 $cols = 0;
							 echo '<table border="0" cellpadding="1" cellspacing="10" style="margin-left:0px;font-size:12pt;"><tr>';
							 while($result = $qryrec->fetch(PDO::FETCH_BOTH)){
							 	echo "<td>";
							 	echo "<table width='200' border='0'>";
							 	echo "<tr>";
							 	echo '<td colspan="2">'.'<a href="viewprof.php?postID='.$result['postID'].'"  >'.'<img src="'.$result['Image'].'" width="200" height="150">'.'</a>'.'</td>';
							 	echo "</tr>";
							 	echo "<tr>";
							 	echo "<td width='300'><a onclick='openNav()'>".$result['Title']."</a></td>";
							 	echo "</tr>";
							 	echo "</table>";
							 	echo "</td>";
							 	$cols ++;
							 if($cols==4){
							 	echo '</tr><tr>';
							 	$cols = 0;
							 }
							}
							echo '</tr></table>';
							?>
							<div id="myNav" class="overlay">
 						 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 						 <div style="display:block;background-color:#fff;width:1100px;position:relative;left:125px;">
  						<div class="overlay-content">
  							<?php

  							$querys= "SELECT * FROM tbl_artworks WHERE postID='".$_GET['postID']."'";
  							$resultsl=$con->query($querys);
						while($datas = $resultsl->fetch(PDO::FETCH_BOTH)){
							$name = $datas[2];
							$desc = $datas[4];
							$image = $datas[3];
							$id = $datas[0];
							$cat = $datas[5];
							$subcat = $datas[6];
							$time = $datas[7];
							$dateR = $datas[8];
						}
							echo '<table>';
							echo '<tr>';
							echo '<td rowspan="5"><img src="'.$image.'" width="500" height="350"></td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$name.'</td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$dateR.' '.$time.'</td>';
							echo '</tr>';
							echo '<div id="comments_section" style="overflow:hidden;overlay-y:scroll;display:block;height:200px;width:500px;">';
						$queryc= "SELECT * FROM tbl_comment WHERE postID='".$_GET['postID']."'";
  						$qrycres=$con->query($queryc);
						 while($comres = $qrycres->fetch(PDO::FETCH_BOTH)){
							echo '<tr>';
							echo '<td>'.$comres['Name'].'</td>';
							echo '<td>'.$comres['cmtContent'].'</td>';
							echo '</tr>';
							echo '<tr>';
							echo '<td>'.$comres['Time'].' '.$comres['Date'].'</td>';
							echo '</tr>';
							echo '</div>';
						}
  							?>  							
  							<?php echo '<form action="../Functions/comment.php?postID='.$_GET['postID'].'" method="POST">';?>
  							<textarea name="comment"></textarea>
  							<input type="submit" Value="Comment">
  							</form>
  							</span>
  						</div>
  					</div>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>


